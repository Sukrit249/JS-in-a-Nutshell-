<?php 
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  // Used to add related links to the table content 
  $rel_links = [
    'topic.A.name.php',
    'topic.A.name.php'
  ];
?>
<div class="container">
  <div class="teaser">
    <!-- YOUR SUBJECT TITLE -->
    <h1>Operator</h1> 
    <!-- Teaser -->
    <p>A simple calculator</p>
    <form>
      First Number : &nbsp;&nbsp;&nbsp; <input type="text" id="firstNumber"/><br>
      Second Number : <input type="text" id="secondNumber"/><br> <br>
      <input type="button" onclick="MathAdd()" value="Add"/>
      <input type="button" onclick="MathSub()" value="Subtract"/>
      <input type="button" onclick="MathMult()" value="Multiply"/>
      <input type="button" onclick="MathDiv()" value="Divide"/>
      <input type="button" onclick="MathModulo()" value="Modulo"/>
    </form>
    <p>You'r Result is : <br>
    <span id="result"> </span>
    </p>
  </div>
  <!-- article -->
  <div class="article">
    <h4>The Javascript code looks loke this: <br></h4>
    <p>
    function Math(){ <br> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num1 = document.getElementById("firstNumber").value; <br> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num2 = document.getElementById("secondNumber").value;<br> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("result").innerHTML = +num1 + +num2;<br> <br>}
    </p>
    <p>The num1 and num2 are those two number that you add in. <br></p>
    <p>function Math(){ <br> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num1 = document.getElementById("firstNumber").value; <br> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num2 = document.getElementById("secondNumber").value;<br> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("result").innerHTML = +num1 + +num2;<br> <br>}
    </p>
    <p> The num1 and num2 are those two number that you add in.<br><br>
    Did you see the + operator? between num1 and num2? <br> 
    Normaly you can just typein the operator <br>
    but because the + operator can add strings together, <br>
    we have to specifie our num1 and num2 as numbers, <br> with an + infront of our veriable. 
    </p>
    <h4>Note:</h4>
    <p>The upper version of the code is link with a HTML tags, <br>
    </p>
    <h4>Note:</h4>
  </div>
  <!-- Code Area -->
  <p>The upper version of the code is link with a HTML tags, <br>
  to write in js only it will look like this: <br><br>
  let x = 5; <br>
  let y = 2; <br>
  let z = x + y; <br>
    console.log(z);</p>
  <p>But this code will only show in the console</p>
  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
    </div>
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        <button class="btn btn-run" onclick="run(this)">Run</button>
        <button class="btn btn-run" onclick="reset(this)">Reset</button>
      </div>
      <h2 id="outputT">Output:</h2>
      <p id="output">(DELETE THIS TEXT) THIS IS WHERE YOUR CODE WILL BE PUT OUT (UNTIL HERE)</p>
    </div>
  </div>
</div>
<script src="functionOne.js"></script>
<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
