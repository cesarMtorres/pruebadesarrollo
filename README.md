Author : cesar Molina

title : prueba de desarrollo

description: este proyecto fue realizado por el anunciado 2) del documento 
usando buenas practicas con laravel las cuales son 
SOLID y Repository PATTERN para hacer un codigo mantenible y limpio 
los otros enunciados no fueron realizados por cuestiones de tiempo

el projecto solo funciona en modo api 
* Usar curl o postman 

tools 
    laravel 9
    php 8
    mysql 8.0.27
    vuejs 3
    liveware
    git

Nota:

instalar con composer install

provado en fedora



TODO improve: 
    crear un BaseRepository y BaseInterface para refactorizar mas el codigo
    usar tdd para los nuevos features
    usar form Request para las validaciones
    usar scope 
    implementar una clase Service para la logica del negocio y mantener limpio los controller o Repositories
    terminar los otros endpoints del enunciado

* BUGS:
* deacuerdo a mi version de mysql no pude importar la base de datos por porblema del formato de fechas
* que fueron registras 
importar la base de datos del enunciado con 
    mysql -u root -p northwind < northwind.sql
 
 retorna :   
    
    ERROR 1292 (22007) at line 1368: Incorrect datetime value: '2007-08-01- 00:00:00.000' for column `Northwind`.`SalesOrder`.`shippedDate` at row 1

* el error es causado por el guion '-' al final de la fecha     2007-08-01"-"  ese ultimo guion en las tablas produce el error
* esto se produce en multiples veces 

make with love by cesar
