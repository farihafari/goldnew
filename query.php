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
        
 };
//  search 

if (isset($_POST['search'])) {
    $searchValue = $_POST['search'];

    // Prepare and execute the query
    $query = "SELECT * FROM partiesprofile WHERE acc_id = :searchValue";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':searchValue', $searchValue, PDO::PARAM_STR);
    $stmt->execute();

    // Fetch the data
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // If data found, send back JSON response
    if ($result) {
        echo json_encode([
            'partyName' => $result['party_name'],
            'date' => $result['datetime'],
            'goldType' => $result['recivable_Type'],
            'goldRecieve' => $result['recivable_gold']
        ]);
    } else {
        echo json_encode([
            'partyName' => '',
            'date' => '',
            'goldType' => '',
            'goldRecieve' => ''
        ]);
    }
}
?>
