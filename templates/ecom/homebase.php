{% load static %}
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Porrlanas</title>

</head>

<body>
  {%if request.user.is_authenticated%}
    {% include "ecom/customer_navbar.php" %}
  {%else%}
    {% include "ecom/navbar.php" %}
  {%endif%}


  {%block content%}

  {%endblock content%}

  
  {% include "ecom/footer.php" %}
</body>
<!--
developed By :  Juan Pablo Guerras Porras
facebook : 
Wasap: 
-->

</html>
