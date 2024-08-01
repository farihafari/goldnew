<?php
$server ='mysql:host=localhost;dbname=gold';
$user = 'root';
$password='';
$pdo = new PDO($server,$user,$password);

// for id 
$query = $pdo->query('select * from partiesprofile');
$rowAll = $query->fetchAll(PDO::FETCH_ASSOC);
$countRow = count($rowAll);
// insert
if(isset($_POST['save'])){
    $accountId = $_POST['accId'];
    $partyName = $_POST['partyName'];
    $contact =$_POST['contact'];
    $date =$_POST['date'];
    $address =$_POST['address']; 
     $recGold =$_POST['recGold'];
        $recCash =$_POST['recCash'];
        $recGoldType=$_POST['recGoldType'];
        $payGold =$_POST['payGold'];
        $payCash =$_POST['payCash'];
        $payGoldType=$_POST['payGoldType'];
        $query = $pdo ->prepare('INSERT INTO `partiesprofile`(`acc_id`, `party_name`, `contact`, `datetime`, `address`, `recivable_gold`, `recivable_cash`, `recivable_Type`, `payable_gold`, `payable_cash`, `payable_Type`) VALUES(:acc_id,:party_name,:contact,:datetime,:address,:recivable_gold,:recivable_cash,:recivable_Type,:payable_gold,:payable_cash,:payable_Type)');
        $query->bindParam(':acc_id',$accountId);
        $query->bindParam(':party_name',$partyName);
        $query->bindParam(':contact',$contact);
        $query->bindParam(':datetime',$date);
        $query->bindParam(':address',$address);
        $query->bindParam(':recivable_gold',$recGold);
        $query->bindParam(':recivable_cash',$recCash);
        $query->bindParam(':recivable_Type',$recGoldType);
        $query->bindParam(':payable_gold',$payGold);
        $query->bindParam(':payable_cash',$payCash);
        $query->bindParam(':payable_Type',$payGoldType);
        $query->execute();
echo "<script>alert('data added successfully');
location.assign('grid.php')
</script>";
        
 }
//  searching work
if(isset($_POST['partyId'])){
    $search =$_POST['partyId'];
    $query = $pdo ->prepare("select * from partiesprofile where acc_id=:pid");
    $query->bindParam('pid',$search);
    $query ->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
//    var_dump($row);
    // echo "<script>alert('".$row['acc_id']."')</script>";
    echo json_encode($row);

}
?>
