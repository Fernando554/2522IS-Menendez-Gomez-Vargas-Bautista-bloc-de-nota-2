@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Procesos y tareas del programa maestro</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Proceos y tareas del programa maestro</h1>
      <h2>Elementos del programa maestro</h2>
      <p>Pronostico de demanda:</p>
      <p>Para realizar los pronósticos de demanda, se utilizan métodos de series de tiempo o de tipo cualitativo. Su cálculo se realiza a corto plazo y solo para productos específicos.
Por último, establecemos las ordenes de producción alineando lo obtenido en el pronóstico de demanda con los pedidos de los clientes. En cualquier caso, no todas las organizaciones hacen esto.
 El sistema de manufactura utilizado (MTO, MTS, ATO) puede variar la manera de establecer esas ordenes.</p>
 <p>Disponibilidad de los materiales:</p>
 <p>Con esta Gestión, los responsables se encargan de programar, controlar y evaluar las operaciones de producción vinculadas con la asignación de trabajos a los distintos puestos. Además, 
   organizan las entregas de materiales y de los pedidos de los productos terminados.</p>
   <p>Gestion de talleres:</p>
   <p>• Evaluación y control de los pedidos
• Identificación de las prioridades en los pedidos, asignándolos a los distintos puestos de trabajo
• Seguimiento de los pedidos
• Control del desarrollo de las operaciones y de la capacidad de cada centro de trabajo
• Proporcionar información para el Sistema de Planificación y Control de la Capacidad de la empresa.</p>
<p>Tiempo de produccion:</p>
<p>Un MPS no se puede elaborar sin saber el tiempo que se tarda en elaborar un producto o servicio, sin importar el sistema de trabajo: trabajo para almacenar (MTS, make to stock), montaje bajo pedido (ATO, Assemble to order) o fabricación bajo pedido (Make to order)

Una vez que se tiene esa información, ya es posible comprometerse con los clientes para entregar el pedido en una fecha concreta.</p>

<img src="../images/demo/arqui.png" alt="" width="600px" height="150px">

<h2>Proceso para realizar el programa maestro de produccion</h2>
<p>Para realizar un PMP hay que partir de la demanda, ya sea pronosticad y/o basada en los pedidos de los clientes. Una vez que se tengan esos datos, hay que comenzar a elaborar 
  un plan que se ajuste a los definido en el Plan Agregado. Hay algunos aspectos que se deben considerar:</p>
  <p>• Necesidades de entrega de los clientes</p>
  <p>• Los niveles de capacidad y los de producción tienen que estar ajustados</p>
  <p>• Definir los niveles de inventario</p>
  <p>• Ajustar los planes a la estrategia de producción de la empresa</p>
  <p>• Todos estos aspectos deben ajustarse al sistema de manufactura de la empresa. Cada entorno de producción requiere una elaboración distinta del MPS.</p>
  <p>El plan tiene que ser realista, sin pensar que se puede cubrir la demanda en plazos imposibles. Es fundamental conocer los recursos de la planta para no errar en la planificación.</p>
  <p>Normalmente, primero se desarrolla un borrador del Plan para determinar que cantidades de producto son alcanzables en el plazo de entrega establecido.</p>
  <p>Igualmente, es necesario conocer las necesidades de entrega de los clientes y ver cómo ajustar los niveles de capacidad con los de producción. Además, hay que determinar los inventarios.</p>
  <p>En el caso de que se produzca una sobrecarga en la capacidad de producción, el plan tiene que revisarse para ajustar las prioridades o para volver a calcular los plazos de entrega.</p>
  
  
  <h2>Tareas del programa maestro de produccion</h2>
  <p>1.Previsión de la demanda: Se trata del primer paso que tiene lugar en el PMP. La previsión de la demanda se basa en -como su nombre lo indica- realizar un pronóstico de las ventas en un periodo en específico. De modo que la empresa pueda contar con una base para saber cuánto necesitará producir.</p>
  <p>2.Planificación de la capacidad de producción: En esta fase, la compañía debe establecer cuál es su capacidad tanto a medio como largo plazo.</p>
  <p>3.Planificación de materiales: Una de las etapas cruciales dentro del Plan Maestro de Producción, es donde la empresa establecerá la cantidad de materiales necesarios para la producción.
    <p>4.Planificación de la producción: Cuando existe una gran demanda, es necesario aplicar la Planificación de la producción a corto plazo, asignando la materia prima a las demandas más valiosas para la empresa.</p>
El objetivo de la planificación de materiales es conocer la cantidad y el plazo del pedido para realizar la compra de materiales y así obtener una buena gestión.</p>

  <!-- ################################################################################################ -->
    </div>
@endsection