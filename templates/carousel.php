<div id="portfolio" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

        {% for img in images %}

        <div class="item {{ img.status }}">
            <img src="{{ app.request.basepath }}/{{ img.path }}">
            <div class="carousel-caption">
                {{ img.caption }}
            </div>
        </div>
        {% endfor %}
    </div>


    <!-- Controls -->
    <a class="left carousel-control" href="#portfolio" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#portfolio" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>