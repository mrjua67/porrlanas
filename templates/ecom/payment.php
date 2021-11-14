{% extends 'ecom/customer_base.php' %}
{% load static %}

{% block content %}
<head>

</head>
<style media="screen">

.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }
</style>
<br><br>
<marquee scrolldelay="50">ES FALSA PAGINA DE PAGO. NO ALMACENAMOS SUS DATOS</marquee>
<marquee scrolldelay="50">ES SOLO PARA DEMO</marquee>
<br><br>
<div class="container" style="text-align:center; padding-left:300px;">
    <div class="row">
        <div class="col-xs-12 col-md-4" style="height:500px; width:600px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Detalles de Pago
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Recordar
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" method="post">
                    <div class="form-group">
                        <label for="cardNumber">
                            Numero de Tarjerta</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    Fecha de Expiracion</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    Codigo CV</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right">{{total}}</span> Pago Final</a>
                </li>
            </ul>
            <br/>
            <a href="/payment-success" class="btn btn-success btn-lg btn-block" role="button">Pagar</a>
        </div>
    </div>
</div>


{% endblock content %}
