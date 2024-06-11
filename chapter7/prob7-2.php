<?php
    try {
        $db=new PDO('mysql:host=localhost;dbname=school','root','root');
        $id=1001;
        $name="";
        $stmt=$db->prepare("UPDATE student SET name=? WHERE id=?;");
        $stmt->bindParam(1,$name,PDO::PARAM_STR);
        $stmt->bindParam(2,$id,PDO::PARAM_INT);
        $res=$stmt->execute();
        $db=null;

    } catch (PDOException $e) {
        echo "<br>";
        echo $e->getMessage();
    }
?>