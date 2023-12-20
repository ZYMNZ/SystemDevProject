<?php
include_once "database.php";
class DatabaseController{

    public function printTables()
    {
         $conn = openDatabaseConnection();

        // Validate the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SHOW TABLES FROM lumia";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $tableName = $row["Tables_in_" . "lumia"];
                $tableData = $this->getTableData($tableName);
                echo"<a href='?controller=home&action=home'><button type='submit'> HOME PAGE </button></a>";
                echo "<h3>Table: $tableName</h3>";

                if (empty($tableData)) {
                    echo "<p>No data available</p>";
                } else {
                    echo "<table border='1'>";
                    echo "<tr>";
                    // Display table headers
                    foreach (array_keys($tableData[0]) as $column) {
                        echo "<th>$column</th>";
                    }
                    echo "</tr>";

                    // Display table data
                    foreach ($tableData as $rowData) {
                        echo "<tr>";
                        foreach ($rowData as $value) {
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }

                    echo "</table>";
                }

                echo "<br>";
            }
        } else {
            echo "<p>No tables found in the database</p>";
        }

        // Close the connection
        $conn->close();
    }

    // Move getTableData outside printTables
    private function getTableData($tableName)
    {
        $conn = openDatabaseConnection();

        // Validate the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Wrap the table name with backticks to handle reserved keywords
        $sql = "SELECT * FROM `" . $tableName . "`";
        $result = $conn->query($sql);
        $tableData = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tableData[] = $row;
            }
        }

        return $tableData;
    }

    function route()
    {
        global $action;
        if ($action=="print"){
            self::printTables();
//            self::render($action);
        }

    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/error/$action.php";
    }
}