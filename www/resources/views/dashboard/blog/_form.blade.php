<form class="needs-validation" enctype="multipart/form-data" method="post" action="{{ $action }}">
    @csrf

    @if(isset($result) && $result->id)
        <input type="hidden" name="id" value="{{ $result->id }}">
    @endif

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Название</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" name="name"
                   value="{{ isset($result) && $result->name ? $result->name : '' }}"
                   placeholder="Название">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Ссылка</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" name="alias"
                   value="{{ isset($result) && $result->alias ? $result->alias : '' }}"
                   placeholder="Ссылка">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Контент</label>
        <div class="col-lg-7">
            <textarea class="form-control" id="summernote" name="content" placeholder="Контент"
                      required="">{{ isset($result) && $result->content ? $result->content : '' }}</textarea>
            <div class="invalid-feedback">
                Введите контент
            </div>
        </div>
    </div>

    <div class="em-separator separator-dashed"></div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Title</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" name="title"
                   value="{{isset($result) &&  $result->title ? $result->title : '' }}"
                   placeholder="Title">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Description</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="description" placeholder="Description"
                      required="">{{ isset($result) && $result->description ? $result->description : '' }}</textarea>
            <div class="invalid-feedback">
                Please enter a description
            </div>
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Keywords</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="keywords" placeholder="Keywords ..."
                      required="">{{ isset($result) && $result->keywords ? $result->keywords : '' }}</textarea>
            <div class="invalid-feedback">
                Please enter keywords
            </div>
        </div>
    </div>

    <div class="em-separator separator-dashed"></div>

    @if(!isset($result->image))
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Обложка</label>
            <div class="col-lg-7">
                <input type="file" name="file">
            </div>
        </div>

        <div class="em-separator separator-dashed"></div>
    @endif

    <div class="form-group row mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Статус *</label>
        <div class="col-lg-2">
            <div class="custom-control custom-radio styled-radio mb-3">
                <input class="custom-control-input" type="radio" name="status" id="status-on" value="on"
                       {{ isset($result) && $result->status == 1 ? 'checked=""' : '' }} required="">
                <label class="custom-control-descfeedback" for="status-on">Опубликовано</label>
                <div class="invalid-feedback">
                    Опубликовано
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="custom-control custom-radio styled-radio mb-3">
                <input class="custom-control-input" type="radio" name="status" id="status-off" value="off"
                       {{ !isset($result) || $result->status == 0 ? 'checked=""' : '' }} required="">
                <label class="custom-control-descfeedback" for="status-off">Не опубликовано</label>
                <div class="invalid-feedback">
                    Не опубликовано
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button class="btn btn-gradient-01" type="submit">Сохранить</button>
        <button class="btn btn-shadow" type="reset">Сброс</button>
    </div>
</form>
