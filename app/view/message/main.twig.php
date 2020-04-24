{% extends 'partials/body.twig.php' %}

{% block title %}Página não encontrada - Framework{% endblock %}

{% block body %}
<div class="max-width center-screen bg-white padding">
    <div class="card border-danger mb-3" style="max-width: 20rem;">
    <div class="card-header">&nbsp;</div>
    <div class="card-body">
        <h4 class="card-title">{{title}}</h4>
        <p class="card-text">{{message}}</p>
    </div>
    </div>
</div>
{% endblock %}


