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
   var_dump($row);
die();
?>


<div class="col-lg-4 mt-2">
    <label for="inputPassword6" class="col-form-label form-label">To :</label>
</div>
<div class="col-lg-8 mt-2">
    <input type="text"  class="form-input" id="searchId" value='<?php echo $row['acc_id'] ?>' name="partyId">
</div>

<div class="col-lg-4 mt-2">
    <label for="inputPassword6" class="col-form-label form-label">Party Name :</label>
</div>
<div class="col-lg-8 mt-2">
    <input type="text"  class="form-input" value='<?php echo $row['party_name'] ?>' name="partyName">
</div>

<div class="col-lg-4 mt-2">
    <label for="inputPassword6" class="col-form-label form-label">Date :</label>
</div>
<div class="col-lg-8 mt-2">
    <input type="date"  class="form-input" name="partyDate" value='<?php echo $row['datetime'] ?>'>
</div>

<div class="col-lg-4 mt-2">
    <label for="inputPassword6" class="col-form-label form-label">Gold Type:</label>
  </div>
  <div class="col-lg-8 mt-2">
   <select name="recGoldType" name="partyGoldType">
    <option value='<?php echo $row['recivable_Type'] ?>'><?php echo $row['recivable_Type'] ?></option>
 
    

   </select>
  </div>

<div class="col-lg-4 mt-2">
    <label for="inputPassword6" class="col-form-label form-label">Gold Recieve :</label>
</div>
<div class="col-lg-8 mt-2">
    <input type="text"  class="form-input" name="partyGoldRecieveType" value='<?php echo $row['recivable_gold'] ?>'>
</div>
<?php
}
?>
