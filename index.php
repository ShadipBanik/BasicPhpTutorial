
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responsive CSS Tabs</title>

      <link rel="stylesheet" href="css/style.css" />
      <script src="js/jquery-1.11.1.min.js"> </script>
      <script src="js/script.js"> </script>
</head>

<body>

  <h1>Simple Programming Converter.</h1>

<main>

  <input class="tabinp" id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">NumberConversion</label>

  <input class="tabinp" id="tab2" type="radio" name="tabs" >
  <label for="tab2">Gcd&Lcm</label>

  <input class="tabinp" id="tab3" type="radio" name="tabs">
  <label for="tab3">StringManipulation</label>

  <input class="tabinp" id="tab4" type="radio" name="tabs">
  <label for="tab4">Piramid</label>


  <section id="content1">
    <div class="center">
       <h1>
       Number Conversion  System .
       </h1>

           <div class="spelmnt1">
               <br><br>

               <select class="spselect"  id="selectid1" >
               <option value="decimal">Decimal</option>
               <option value="binary">Binary</option>
               <option value="octal">Octal</option>
               <option value="hexadecimal">Hexadecimal</option>

               </select><br>
               <input class="spinp" type="text" id="input" placeholder="Enter a number" value=""></input>
            </div>
                   <div class="spelemnt2">
                               <br><br>
                               <select class="spselect" id="selectid2" >
                               <option value="decimal">Decimal</option>
                               <option value="binary">Binary</option>
                               <option value="octal">Octal</option>
                               <option value="hexadecimal">Hexadecimal</option>

                               </select><br>
                               <textarea class="spoutput"  id="output" rows="2" placeholder="Show output" value="" cols="20"></textarea>
                   </div>

                   <input class="spbutton"  type="submit" id="submit" value="CONVERT"/>


 </div>
</section>

  <section id="content2" >
   <div class="center">
         <h1>
         Find Gcd & Lcm Between Two Number.
         </h1>

          <div class="matelmnt1">

                <select class="matselect"  id="matselectid1">
                <option value="gcd">GCD</option>
                <option value="lcm">LCM</option>

                </select><br>
                <input class="matinp" type="text"  id="matinput1" placeholder="Enter first number"value=""></input>
                <input class="matinp" type="text"  id="matinput2" placeholder="Enter second number"value=""></input>
        </div>
                 <div class="matelemnt2">
                   <br><br>
                        <textarea class="matoutput" id="matout" rows="2" placeholder="Show output" value="" cols="16"></textarea>
                 </div>

                 <input class="matbutton" id="matsubmit"  type="submit"  value="CONVERT"/>

   </div>
 </section>

  <section  class="sec1" id="content3">
  <div class="center">
        <h1>
        String Manipulation
        </h1>

                    <div class="elmnt1">
                                <br><br>
                                <input class="strinp" type="text" id="strinput1" placeholder="Enter a string" value=""></input>
                                <input class="strinp" type="text"  id="strinput2" placeholder="Enter a substring" value=""></input>
                    </div>
                    <div class="elemnt2">
                      <br><br>
                                <textarea class="stroutput" id="stroutput"  rows="2" placeholder="Show output" value="" cols="16"></textarea>
                    </div>

                    <input class="strbutton" id="strbutton"  type="submit" value="CONVERT" />

  </div>
</section>

<section id="content4">
  <div class="center">
        <h1>
            See Your number of  Piramid
        </h1>

                    <div class="pirelmnt1">
                                <br><br><br>
                                <input class="pirinp" type="text" id="pirinput1" placeholder="Enter row Number" value=""></input>
                    </div>
                    <div class="pirelemnt2">

                  <textarea class="piroutput" id="piroutput" rows="10" placeholder="Show output" value="" cols="30"></textarea>
                    </div>

                    <input class="pirbutton"  type="submit" id="pirsubmit" value="CONVERT"/>

  </div>
</section>

</main>



</body>

</html>
