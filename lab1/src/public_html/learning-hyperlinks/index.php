<?php
    $title = "Изучаем гиперссылки в ЯР HTML";
    include ("../_scripts/header.php");
?>

<div class="container">

    <hr/>
    <h3>Обявление гиперссылки <code>< a > < /a ></code></h3>

    <xmp>
        <p>Объявили <a href="ссылка">здесь</a> ссылку.</p>
    </xmp>

    <p>Объявили <a href="ссылка">здесь</a> ссылку.</p>



    <hr/>
    <h3>Обявление гиперссылки по пути</h3>

    <p>Палочка в ссылке (/) - начинать с корня сайта.</p>
    <p>Две точки и палочка (../) - на одну директорию назад с текущей страницы.</p>

    <xmp>
        <p>Ссылка на <a href="/">главную</a> страницу.</p>
        <p>Ссылка на <a href="../">главную</a> страницу (2-ой вариант).</p>

        <p>Ссылка на <a href="/learning-hyperlinks/">эту</a> страницу</p>
        <p>Ссылка на <a href="">эту</a> страницу (2-ой вариант).</p>

        <p>Ссылка на <a href="/_files/flowchart.drawio">блоксхему</a>.</p>
        <p>Ссылка на <a href="../_files/../_files/flowchart.drawio">блоксхему (2-ой вариант)</a>.</p>

        <p>Ссылка на картинку <a href="/_files/flowchart.png">блоксхемы</a>.</p>
        <p>Ссылка на картинку <a href="../_files/../_files/flowchart.png">блоксхемы (2-ой вариант)</a>.</p>
    </xmp>

    <p>Ссылка на <a href="/">главную</a> страницу.</p>
    <p>Ссылка на <a href="../">главную</a> страницу (2-ой вариант).</p>

    <p>Ссылка на <a href="/learning-hyperlinks/">эту</a> страницу</p>
    <p>Ссылка на <a href="">эту</a> страницу (2-ой вариант).</p>

    <p>Ссылка на <a href="/_files/flowchart.drawio">блоксхему</a>.</p>
    <p>Ссылка на <a href="../_files/../_files/flowchart.drawio">блоксхему (2-ой вариант)</a>.</p>

    <p>Ссылка на картинку <a href="/_files/flowchart.png">блоксхемы</a>.</p>
    <p>Ссылка на картинку <a href="../_files/../_files/flowchart.png">блоксхемы (2-ой вариант)</a>.</p>

    <!--  -->

    <hr/>
    <h3>Объявление гиперссылки на сайт</h3>

    <xmp>
        Ссылка на <a href="https://github.com/">GitHub</a>.
    </xmp>

    Ссылка на <a href="https://github.com/">GitHub</a>.

    <!--  -->

    <hr/>
    <h3>Объявление гиперссылки на id</h3>
    <xmp>
        <p>Ссылка на <a href="#kakoito_id_1">секцию 1</a>.</p>
        <p>Ссылка на <a href="#kakoito_id_2">секцию 2</a>.</p>

        <div id="kakoito_id_1">
            <p>Lorem ipsum dolor...</p>
        </div>

        <div id="kakoito_id_2">
            <p>Далеко-далеко за...</p>
        </div>

        <div id="kakoito_id_3">
            <p>Lorem ipsum dolor...</p>
        </div>

        <div id="kakoito_id_4">
            <p>Далеко-далеко за...</p>
        </div>
    </xmp>

    <p>Ссылка на <a href="#kakoito_id_1">секцию 1</a>.</p>
    <p>Ссылка на <a href="#kakoito_id_2">секцию 2</a>.</p>
    <p>Ссылка на <a href="#kakoito_id_3">секцию 3</a>.</p>
    <p>Ссылка на <a href="#kakoito_id_4">секцию 4</a>.</p>

    <div id="kakoito_id_1">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis modi non maiores accusamus necessitatibus tempore consectetur, dolorem inventore nostrum. Voluptates, iure sequi assumenda odit et aliquam deserunt sunt omnis ratione laborum suscipit ea perferendis! Officia, placeat nam nemo ipsam explicabo labore fuga aliquid non eaque quae recusandae accusamus sint aut quas ab impedit quia pariatur ut at beatae! Aliquid ullam repellendus doloremque iusto quod obcaecati? Architecto maiores dolorem modi facere repellendus natus doloribus eaque illo corrupti ut ducimus obcaecati magni commodi saepe libero debitis beatae, eveniet molestias, voluptate iure culpa. Sed cupiditate, minima iste iusto quisquam corporis quas nulla incidunt qui. Numquam nihil ab ad, vel dolore in reprehenderit distinctio necessitatibus, vitae, ratione doloribus dolores quod. Deserunt, itaque totam. Sapiente.</p>
    </div>
    
    <div id="kakoito_id_2">
        <p>Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Заголовок злых маленькая точках, безопасную его рот вскоре большой, заглавных встретил подзаголовок путь за? Предложения однажды рекламных коварный лучше букв решила она, буквоград то, журчит образ строчка. Послушавшись инициал lorem снова однажды журчит над жизни страну рукописи букв города своего ты его буквенных необходимыми если составитель буквоград рукопись, мир запятых даль злых речью? Лучше до ты, грустный, свой проектах рекламных запятых на берегу себя, вдали курсивных дал взгляд заголовок но lorem бросил оксмокс его! Наш обеспечивает она которое его подпоясал даль встретил! Своих предупреждал путь большой, ведущими ручеек, дал маленькая журчит маленький букв, грустный всемогущая щеке? Текст рыбного безопасную сих заголовок переписывается дал, запятых вершину ведущими свою. Гор снова она пояс?</p>
    </div>

    <div id="kakoito_id_3">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis modi non maiores accusamus necessitatibus tempore consectetur, dolorem inventore nostrum. Voluptates, iure sequi assumenda odit et aliquam deserunt sunt omnis ratione laborum suscipit ea perferendis! Officia, placeat nam nemo ipsam explicabo labore fuga aliquid non eaque quae recusandae accusamus sint aut quas ab impedit quia pariatur ut at beatae! Aliquid ullam repellendus doloremque iusto quod obcaecati? Architecto maiores dolorem modi facere repellendus natus doloribus eaque illo corrupti ut ducimus obcaecati magni commodi saepe libero debitis beatae, eveniet molestias, voluptate iure culpa. Sed cupiditate, minima iste iusto quisquam corporis quas nulla incidunt qui. Numquam nihil ab ad, vel dolore in reprehenderit distinctio necessitatibus, vitae, ratione doloribus dolores quod. Deserunt, itaque totam. Sapiente.</p>
    </div>
    
    <div id="kakoito_id_4">
        <p>Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Заголовок злых маленькая точках, безопасную его рот вскоре большой, заглавных встретил подзаголовок путь за? Предложения однажды рекламных коварный лучше букв решила она, буквоград то, журчит образ строчка. Послушавшись инициал lorem снова однажды журчит над жизни страну рукописи букв города своего ты его буквенных необходимыми если составитель буквоград рукопись, мир запятых даль злых речью? Лучше до ты, грустный, свой проектах рекламных запятых на берегу себя, вдали курсивных дал взгляд заголовок но lorem бросил оксмокс его! Наш обеспечивает она которое его подпоясал даль встретил! Своих предупреждал путь большой, ведущими ручеек, дал маленькая журчит маленький букв, грустный всемогущая щеке? Текст рыбного безопасную сих заголовок переписывается дал, запятых вершину ведущими свою. Гор снова она пояс?</p>
    </div>
    
    <!--  -->

    <hr />
    <h3>Гиперссылка, которая откроет страницу в новой вкладке</h3>

    <p><b>target="_blank"</b> позволяет открыть ссылку в новой вкладке.</p>

    <xmp>
        <p>Ссылка на <a href="https://github.com/" target="_blank">GitHub</a> в новом окне.</p>
        <p>Ссылка на <a href="https://github.com/">GitHub</a> в этом окне.</p>
    </xmp>

    <p>Ссылка на <a href="https://github.com/" target="_blank">GitHub</a> в новом окне.</p>
    <p>Ссылка на <a href="https://github.com/">GitHub</a> в этом окне.</p>

    <!--  -->

</div>
<!-- end .container -->