<?php


$connect = new PDO("mysql:host=localhost;dbname=medkee", "demo", "long123");
$received_data = json_decode(file_get_contents("php://input"));
$data = array();
if($received_data->action == 'fetchall')
{
 $query = "
 SELECT * FROM student_list 
 ORDER BY id DESC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}
if($received_data->action == 'insert')
{
 $data = array(
  ':Name' => $received_data->Name,
  ':Age' => $received_data->Age,
  ':Sex' => $received_data->Sex,
  ':Address' => $received_data->Address,
  ':Class' => $received_data->Class,
 );

 $query = "
 INSERT INTO student_list 
 (Name, Age, Sex, Address, Class) 
 VALUES (:Name, :Age, :Sex, :Address, :Class)
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 $output = array(
  'message' => 'Data Inserted'
 );

 echo json_encode($output);
}
if($received_data->action == 'fetchSingle')
{
 $query = "
 SELECT * FROM student_list 
 WHERE id = '".$received_data->id."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['Name'] = $row['Name'];
  $data['Age'] = $row['Age'];
  $data['Sex'] = $row['Sex'];
  $data['Address'] = $row['Address'];
  $data['Class'] = $row['Class'];
 }

 echo json_encode($data);
}

if($received_data->action == 'update')
{
 $data = array(
  ':Name' => $received_data->Name,
  ':Age' => $received_data->Age,
  ':Sex' => $received_data->Sex,
  ':Address' => $received_data->Address,
  ':Class' => $received_data->Class,
  ':id'   => $received_data->hiddenId
 );

 $query = "
 UPDATE student_list 
 SET Name = :Name, 
 Age = :Age,
 Sex = :Sex,
 Address = :Address,
 Class = :Class
 WHERE id = :id
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 $output = array(
  'message' => 'Data Updated'
 );

 echo json_encode($output);
}
// if($received_data->action == 'update')
// {
//  $data = array(
//   ':Name' => $received_data->Name,
//   ':Age' => $received_data->Age,
//   ':Sex' => $received_data->Sex,
//   ':Address' => $received_data->Address,
//   ':Class' => $received_data->Class,
//   ':id'   => $received_data->hiddenId
//  );

//  $query = "
//  UPDATE student_list 
//  SET Name = :Name, 
//  Age = :Age,
//  Sex = :Sex,
//  Address = :Address,
//  Class = :Class,
//  WHERE id = :id
//  ";

//  $statement = $connect->prepare($query);

//  $statement->execute($data);

//  $output = array(
//   'message' => 'Data Updated'
//  );

//  echo json_encode($output);
// }

if($received_data->action == 'delete')
{
 $query = "
 DELETE FROM student_list 
 WHERE id = '".$received_data->id."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $output = array(
  'message' => 'Data Deleted'
 );

 echo json_encode($output);
}

?>