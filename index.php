<?php

try {
  require_once __DIR__ . '/Model/Address.php';
  require_once __DIR__ . '/Traits/Position.php';
  require_once __DIR__ . '/Model/User.php';
  require_once __DIR__ . '/Model/Employee.php';
  require_once __DIR__ . '/Model/Membership.php';
  require_once __DIR__ . '/Model/PremiumUser.php';
  require_once __DIR__ . '/db/db.php';
} catch (Exception $e) {
  $error = $e->getMessage();
} 


// $ugo = new User('Ugo', 'de Ughi', new Address('Via dei Platani','Milano','20100') );
// $ugo->setAge(80);
// $ugo->address->street = 'Via dei Ciclamini';
// $ugo->email = 'ugo@gmail.com';




// $giuseppe = new Employee('Giuseppe','Verdi',80,new Address('Via del Conservatorio','Milano','20100'),1, 45.456789, 9.123456);


// $filippo = new User('Filippo','Bianchi',80,new Address('Via dela RSA ','Milano','20100'));

// $martina =  new PremiumUser('Martina','de Martini',30,new Address('Via delle Martine','Roma','00100'), new Membership('Premium',100,'2023-11-07'));

// var_dump($giuseppe);
// var_dump($giuseppe->getPosition());
// var_dump($filippo);
// var_dump($martina);
// var_dump($martina->membership->getMembershipDetail());

// metodi e prprietà statiche
// var_dump(Address::$country);
// var_dump(User::sayHello('Ugo'));

 //die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <title>Lista User</title>
</head>
<body>

<div class="container my-5">

<?php if(isset($error)):?>
  <div class="alert alert-danger" role="alert">
    <?php echo $error;?>
  </div>

<?php else: ?>
  <h1>Lista utenti</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Età</th>
      <th scope="col">Sconto</th>
      <th scope="col">Indirizzo</th>
      <th scope="col">Livello</th>
      <th scope="col">Membership</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
      <tr>
        <td><?php echo $user->getFullName() ?></td>
        <td><?php echo $user->getAge() ?></td>
        <td><?php echo $user->discount ?></td>
        <td><?php echo $user->address->getFullAddress() ?></td>
        <td><?php echo $user->level ?? '-' ?></td>
        <td><?php echo isset($user->membership) ? $user->membership->getMembershipDetail() : '-' ?> </td>

      </tr>
    <?php endforeach;?>


  </tbody>
</table>

<ul class="list-group my-5">
<?php foreach($users as $user): ?>
  <li class="list-group-item"><?php echo get_class($user) ?> - <?php echo $user->getUserInfo() ?></li>
<?php endforeach;?>
</ul>

<?php endif;?>

</div>
  
</body>
</html>