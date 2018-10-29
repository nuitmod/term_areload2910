<?php

echo "php scrypt i2</br>";

//echo "$_POST['name']";

function wm()
{
  $n=htmlspecialchars($_GET[ 'name' ]);
  $j=htmlspecialchars($_GET[ 'job' ]);
//  $n=$_GET[ 'name' ];
//  $j=$_GET[ 'job' ];
  echo "Hello, $n!</br>";
  echo "A $n is a $j</br>";
}

wm();
?>

<!---{% extends "php_p/wrapper.html" %}
{% block content %}
<h3>i2.php</h3>
</br>
{% endblock %}--->

<a href="index.php">back to index</a>
</br>

<?php

echo $_GET[ 'name' ]; echo "\n";
wm()

?>
