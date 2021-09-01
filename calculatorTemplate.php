<?require_once 'header.inc.php';?>
<main>
    <script src="functionOne.js"></script>
    <div class="container">
        <h1>Calculation: addition, subtraction, division, modulo</h1> <!-- TITLE -->
        <div class="teaser">
            <p>
            Put a Number insite the text box:
            </p>
            <form>
            First Number : &nbsp;&nbsp;&nbsp; <input type="text" id="firstNumber"/><br>
            Second Number : <input type="text" id="secondNumber"/><br> <br>
            <input type="button" onclick="MathAdd()" value="Add"/>
            <input type="button" onclick="MathSub()" value="Subtract"/>
                <input type="button" onclick="MathMult()" value="Multiply"/>
                <input type="button" onclick="MathDiv()" value="Divide"/>
                <input type="button" onclick="MathModulo()" value="Modulo"/>
            </div>
        </form>
            <p>You'r Result is : 
        <br>
                <span id="result"> </span>
            </p>
        </div>
    
        <div class="article">
            <p>
            </p>
        </div>
    
        <div class="codeArea flex-container codeExample">
            <div class="col-6 code">
                <h4>The Javascript code looks loke this: <br></h4>
                <p>
                    
                </p>
                <p>
                function Math(){ <br> <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num1 = document.getElementById("firstNumber").value; <br> <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num2 = document.getElementById("secondNumber").value;<br> <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("result").innerHTML = +num1 + +num2;<br> <br>
                }
                </p>
            <p> The num1 and num2 are those two number that you add in. <br> 
                <br>
                Did you see the + operator? between num1 and num2? <br> 
                Normaly you can just typein the operator <br>
                but because the + operator can add strings together, <br>
                we have to specifie our num1 and num2 as numbers, <br> with an + infront of our veriable. 
             </p>
             <h4>Note:</h4>
             <p>The upper version of the code is link with a HTML tags, <br>
               to write in js only it will look like this: <br><br>
                let x = 5; <br>
                let y = 2; <br>
                let z = x + y; <br>
                 console.log(z);</p>
                <p>But this code it will only show in the console</p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p>
                    <!-- OUTPUT HERE -->
                </p>
                <button class="btn run" onclick="run(this)">Run</button>
                <button class="btn reset" onclick="reset(this)">Reset</button>
            </div>
        </div>
    </div>

    <div class="tableOfContent">
        <ul>
            <li><a href=https://www.w3schools.com/js/js_arithmetic.asp></a>W3schools</li>
        </ul>
    </div>
</main>
<?require_once 'footer.inc.php';?>