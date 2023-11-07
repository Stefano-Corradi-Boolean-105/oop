<?php


$users = [
  new User('Ugo', 'de Ughi', 50, new Address('Via dei Platani','Milano','20100') ),
  new PremiumUser('Martina','de Martini',30,new Address('Via delle Martine','Roma','00100'), new Membership('Premium',100,'2023-11-07')),
  new User('Filippo', 'de Filippi', 30, new Address('Via dei Ciclamini','Milano','20100') ),
  new Employee('Giuseppe','Verdi',80,new Address('Via del Conservatorio','Milano','20100'),1),
  new User('Martina', 'Rossi',   25, new Address('Via delle Betulle','Milano','20100') ),
];

