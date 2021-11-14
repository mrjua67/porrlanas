{% extends 'ecom/admin_base.php' %}
{% load static %}
{% block content %}
<br>
{%include 'ecom/admin_dashboard_cards.php'%}
<br><br><br><br><br>

<hr><hr>
<div class="container" >

    <div class="panel panel-primary" >
      <div class="panel-heading" style="text-align:center;">
        <h6 class="panel-title">Reserva Reciente</h6>
      </div>
      <table class="table table-hover" id="dev-table">
        <thead>
          <tr>
            <th>Nombre de Cliente</th>
            <th>Telefono de Cliente</th>
            <th>Direccion de Entrega</th>
            <th>PNombre de Producto</th>
            <th>Imagen del Producto</th>
            <th>Estado</th>

          </tr>
        </thead>
        {% for product,customer,order in data %}
        <tr>
          {% for c in customer %}
          <td> {{c.get_name}}</td>
          <td>{{c.mobile}}</td>
          <td>{{order.address}}</td>

          {% endfor %}
          {% for p in product %}
          <td> {{p.name}}</td>
          <td> <img src="{% static p.product_image.url %}" alt="Profile Pic" height="40px" width="40px" /></td>

          {% if order.status == 'Pending'%}
          <td> <span class="label label-info">{{order.status}}</span></td>
          {% elif order.status == 'Delivered' %}
          <td> <span class="label label-success">{{order.status}}</span></td>
          {% elif order.status == 'Out for Delivery' %}
          <td> <span class="label label-warning">{{order.status}}</span></td>
          {%else%}
            <td> <span class="label label-primary">{{order.status}}</span></td>
          {%endif%}
          {% endfor %}
        </tr>
        {% endfor %}





      </table>

  </div>
</div>
<!--
developed By :  Juan Pablo Guerras Porras
facebook : 
Wasap: 
-->


{% endblock content %}
