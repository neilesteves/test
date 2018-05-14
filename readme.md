<h1>Prueba Técnica de PHP y SQL</h1>

## 4

POO: Es un paradigma de programación, en el cuál se utilizan objetos, éstos pueden tener atributos y métodos que manipulan los datos de entrada para la obtención de datos de salida. están basados en técnicas cómo herencia, cohesión, abstracción, polimorfismo, acoplamiento y encapsulamiento.

If ternary : Tiene la funcionalidad de un if-else, se da una condición, ejecutar una sentencia si se cumple la condición u otra si no se cumple.

ejemplo:
$res = ($A == $B) ? "A es igual a B" : "A no es igual a B";

$_ FILE : Es una variable global de tipo array, que contiene los archivos que se enviaron a través de un método POST

Symfony: Es un proyecto PHP de software libre que permite crear aplicaciones y sitios web rápidos y seguros de forma profesional

Modelo vista controlador: Es un patrón de arquitectura de software de 3 capas que separa los datos, la lógica de negocio y la interfaz de usuario.

## 5

INNER JOIN: Retorna los registros que tienen valores coincidentes en 2 o más tablas.
LEFT JOIN: Retorna todos los registros de la tabla de la 'izquierda' y los registros coincidentes de la tabla de la 'derecha'.
RIGHT JOIN: Retorna todos los registros de la tabla 'derecha' y los registros coincidentes de la tabla 'izquierda'.
FULL JOIN: Retorna todos los registros cuando hay una coincidencia en la tabla 'izquierda' o 'derecha'.

## 6

Existe 2 forma de eliminar el contenido de una tabla y conservando la tabla.
las sentancias Delete y Truncate, ambos eliminan los registros de una tabla, sin embargo se diferencia en que la sentencia Delete no reinicia los contadores incrementales, y truncate si los reinicia.

## 7
SQL: update Trabajadores set Apellido = 'Ramírez' where Apellido = 'Rodríguez'

## 8
Si, una tabla puede depender de más de una tabla.

## 9
El typo 'BYTE' permite numeros desde 0 a 255, por lo cual el valor máximo sería 255

## 10
los operadores '==' y '===' sirven para comparar, la diferencia es que el operador '===' considera los tipos de variable que se comparan

ejemplo:
- 1 == '1' //true
- 1 === '1' //false, primer valor es de tipo entero y segundo valor es caracter

## 11
En PHP, la diferencia entre comillas simples('') y comillas doble ("")es que comillas doble("") considera el valor de las variables, a diferencia de comillas simples('') que todo lo transforma en texto.
