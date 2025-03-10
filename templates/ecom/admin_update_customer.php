{% extends 'ecom/admin_base.php' %}
{% load widget_tweaks %}
{% block content %}

<head>
  <style media="screen">
    a:link {
      text-decoration: none;
    }

    .note {
      text-align: center;
      height: 80px;
      background: -webkit-linear-gradient(left, #0072ff, #8811c5);
      color: #fff;
      font-weight: bold;
      line-height: 80px;
    }

    .form-content {
      padding: 5%;
      border: 1px solid #ced4da;
      margin-bottom: 2%;
    }

    .form-control {
      border-radius: 1.5rem;
    }

    .btnSubmit {
      border: none;
      border-radius: 1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background: #0062cc;
      color: #fff;
    }

    .menu {
      top: 50px;
    }
  </style>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<br><br><br><br><br><br>
<!------ update page for doctor by admin(sumit)  ---------->
<form method="post" enctype="multipart/form-data">
  {% csrf_token %}
  <div class="container register-form">
    <div class="form">
      <div class="note">
        <p>Actualizar los detalles del cliente</p>
      </div>
      <div class="form-content">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {% render_field userForm.first_name class="form-control" placeholder="Primer Nombre" %}
            </div>
            <div class="form-group">
              {% render_field userForm.username class="form-control" placeholder="Usuario" %}
            </div>
            <div class="form-group">
              {% render_field customerForm.mobile class="form-control" placeholder="Telefono" %}
            </div>
            <div class="form-group">
              {% render_field customerForm.profile_pic class="form-control" placeholder="Foto de Perfil" %}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {% render_field userForm.last_name class="form-control" placeholder="Segundo Nombre" %}
            </div>
            <div class="form-group">
              {% render_field userForm.password class="form-control" placeholder="Contraseña" %}
            </div>
            <div class="form-group">
              {% render_field customerForm.address class="form-control" placeholder="Direccion" %}
            </div>

          </div>
        </div>
        <button type="submit" class="btnSubmit">Actualizar</button>
      </div>
    </div>
  </div>
</form>
<!--
developed By :  Juan Pablo Guerras Porras
facebook : 
Wasap: 
-->

{% endblock content %}
