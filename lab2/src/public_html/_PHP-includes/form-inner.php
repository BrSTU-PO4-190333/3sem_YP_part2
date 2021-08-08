<hr />

<!-- Fields -->
<label>Название поста</label>
<div class="form-group">
    
    <input
        class="form-control"
        type="text"
        name="post-name"
        placeholder="DE-PA Electrik"
        value="DE-PA Electrik"
    />
    <small class="form-text text-muted">Название поста, которое будет отображено на карточке</small>
</div>

<hr />

<label>Ссылка</label>
<div class="form-group">
    
    <input
        class="form-control"
        type="text"
        name="link-to-post"
        placeholder="http://docs.de-pa.by/katalogs/katalog-de-pa-electric.pdf"
        value="http://docs.de-pa.by/katalogs/katalog-de-pa-electric.pdf"
    />
    <small class="form-text text-muted">Ссылка, на которую будет ввести пост. Например нажимает на пост - и скачается PDF.</small>
</div>

<hr />

<label>Ссылка на картинку в посте</label>
<div class="form-group">
    
    <input
        class="form-control"
        type="text"
        name="link-to-img"
        placeholder="/imgs/pdf.png"
        value="/imgs/pdf.png"
    />
    <small class="form-text text-muted">Ссылка на картинку. Картинка изображается на карточке поста</small>
</div>

<hr />

<!-- Radio inputs -->
<label>Тип страницы</label>
<div class="form-group">
    
    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="page-type"
            value="prices"
            checked
        />
        <label class="form-check-label" for="exampleRadios1">
            Прайсы
        </label>
    </div>

    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="page-type"
            value="katalogs"
        />
        <label class="form-check-label" for="exampleRadios2">
            Каталоги
        </label>
    </div>
    
    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="page-type"
            value="certificates"
        />
        <label class="form-check-label" for="exampleRadios3">
            Сертификаты
        </label>
    </div>

    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="page-type"
            value="other"
            disabled
        />
        <label class="form-check-label" for="exampleRadios3">
            Другое
        </label>
    </div>
    <small class="form-text text-muted">Выбираем страницу, на которой будет показан пост с документом</small>
</div>

<hr />

<!-- Check boxes -->
<label>Показывать документ на сайте:</label>
<div class="form-group">
    
    <div class="form-check">
        <input
            class="form-check-input"
            type="checkbox"
            name="hidden-page"
            checked
        />
        <label>Скрыть</label>
    </div>
    <small class="form-text text-muted">При выборе пункта "Скрыть" пост не будет показан</small>
</div>

<hr />

<!-- Button -->
<button
    class="btn btn-primary"
    type="submit" 
>Отправить</button>

<hr />