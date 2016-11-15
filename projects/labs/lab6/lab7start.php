<?php 
  abstract class Operation {
    protected $operand_1;
    protected $operand_2;
    public function __construct($o1, $o2) {
      // Make sure we're working with numbers...
      if (!is_numeric($o1) || !is_numeric($o2)) {
        throw new Exception('Non-numeric operand.');
      }
      
      $this->operand_1 = $o1;
      $this->operand_2 = $o2;
    }
    public abstract function operate();
    public abstract function getEquation(); 
  }


  function factorial($number) { //just a function to solve for factorials so I dont have to do it in my class
    if ($number == 1) {
      return 1;
    }
    else {
      return ($number * factorial($number-1));
    }
  }

  class Addition extends Operation {
    public function operate() {
      return $this->operand_1 + $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }


// Part 1 - Add subclasses for Subtraction, Multiplication and Division here

  class Subtraction extends Operation {
    public function operate() {
      return $this->operand_1 - $this->operand_2; //a - b
    }
    public function getEquation() {
      return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

  class Multiplication extends Operation {
    public function operate() {
      return $this->operand_1 * $this->operand_2; //a * b
    }
    public function getEquation() {
      return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

  class Division extends Operation {
    public function operate() {
      return $this->operand_1 / $this->operand_2; // a / b
    }
    public function getEquation() {
      return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }  

  class Cube extends Operation {
    public function operate() {
      return $this->operand_1 * $this->operand_1 * $this->operand_1;
    }
    public function getEquation() {
      return $this->operand_1 . '^3'. ' = ' . $this->operate();
    }
  }  

  class Factorial extends Operation {
      public function operate() {
        return factorial($this->operand_1);

      }
      public function getEquation() {
        return $this->operand_1 . '!'. ' = ' . $this->operate();
      }
    }  

// End Part 1




// Some debugs - un comment them to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";




// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();


// Part 2 - Instantiate an object for each operation based on the values returned on the form
//          For example, check to make sure that $_POST is set and then check its value and 
//          instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs

  try {
    if (isset($_POST['add']) && $_POST['add'] == 'Add') {
      $op = new Addition($o1, $o2);
    }
// Put the code for Part 2 here  \/
    if (isset($_POST['sub']) && $_POST['sub'] == 'Subtract') {
      $op = new Subtraction($o1, $o2);
    }

    if (isset($_POST['mult']) && $_POST['mult'] == 'Multiply') {
      $op = new Multiplication($o1, $o2);
    }

    if (isset($_POST['div']) && $_POST['div'] == 'Divide') {
      $op = new Division($o1, $o2);
    }

    if (isset($_POST['cubed']) && $_POST['cubed'] == 'Cube') {
      $op = new Cube($o1, $o2);
    }

    if (isset($_POST['fact']) && $_POST['fact'] == 'Factorial') {
      $op = new Factorial($o1, $o2);
    }




// End of Part 2   /\

  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>Lab 7</title>
<style>
#result {
  background-color: blue;
  color: white;
  text-align: center;
  font-size: 30px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
/*  transition: all 0.5s;*/
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
    font-size: 30px;
    text-align: center;
}

input[type=text]:focus {
    background-color: lightblue;
}
}
</style>
</head>
<body>
  <pre id="result">
  <?php 
    if (isset($op)) {
      try {
        echo $op->getEquation();
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }
      
    foreach($err as $error) {
        echo $error . "\n";
    } 
  ?>
  </pre>
  <form method="post" action="lab7start.php">
    <input class="field" type="text" name="op1" id="name" value="" />
    <input class="field" type="text" name="op2" id="name" value="" />
    <br/>
    <!-- Only one of these will be set with their respective value at a time -->
    <input class="button" type="submit" name="add" value="Add" />  
    <input class="button" type="submit" name="sub" value="Subtract" />  
    <input class="button" type="submit" name="mult" value="Multiply" />  
    <input class="button" type="submit" name="div" value="Divide" />  
    <input class="button" type="submit" name="cubed" value="Cube" />
    <input class="button" type="submit" name="fact" value="Factorial" />
  </form>
</body>
</html>

