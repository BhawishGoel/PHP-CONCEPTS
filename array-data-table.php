
        <!-- <table border="1">
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Bhawish</td>
                <td>abc@test.com</td>
            </tr>
                        <tr>
                <td>1</td>
                <td>Bhawish</td>
                <td>abc@test.com</td>
            </tr>
                        <tr>
                <td>1</td>
                <td>Bhawish</td>
                <td>abc@test.com</td>
            </tr>
        </table> -->


        <?php
        $users =[
            [1,"bhawish","bhawish@12.com"],
            [2,"bruce","bruce@12.com"],
            [3,"lee","lee@12.com"],
            [4,"john","john@12.com"],
            [5,"peter","peter@12.com"],
        ];
        
        echo "<table border=1>";
        for($i=0; $i<count($users); $i++){
            echo "<tr>";
            for($j=0; $j<count($users[$i]); $j++){
                    echo "<td>";
                echo $users[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>