<!DOCTYPE html>
<html>
<body>
    <?php
    //ใช้งานไม่ค่อยเหมือนหน้า index ทั้งการ comment แสดง ทำสีพื้นหลัง
        $name = $_GET["name"];//ประกาศตัวแปรที่รับมาจากindex
        $age = $_GET["age"];
        $gender = $_GET["gender"];
        $marrital_status = $_GET["marrital_status"];
        $name_title = "";
        $male = "male";//ประกาศตัวแปร
        $female = "female";
        $married = "married";
        $widowed = "widowed";
        if ($gender == $male)
        {if ($age <= 14)
            {$name_title = "ด.ช";}
            else
            {$name_title = "นาย";}}
        else if ($gender == $female)
        {if ($age <= 14)
            {$name_title = "ด.ญ";}
            else if ($marrital_status==$married||$marrital_status==$widowed)
            {$name_title = "นาง";}
            else{$name_title = "นางสาว";}}
        echo "Name : " .$name_title. " ".$name."<br>";
        echo "Age : " .$age."<br>";
        echo "Gender : " .$gender."<br>";
        echo "Marrital status : " .$marrital_status."<br>";
    ?>
</body>
</html>
