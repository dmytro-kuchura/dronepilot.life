<form class="needs-validation" novalidate="">
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Название</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" value="{{ $result->name ? $result->name : '' }}" placeholder="Название">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ссылка</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" value="{{ $result->alias ? $result->alias : '' }}" placeholder="Ссылка">
        </div>
    </div>

    <div class="em-separator separator-dashed"></div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Title</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" value="{{ $result->title ? $result->title : '' }}" placeholder="Title">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Description</label>
        <div class="col-lg-5">
            <textarea class="form-control" placeholder="Description ..." required=""></textarea>
            <div class="invalid-feedback">
                Please enter a description
            </div>
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Keywords</label>
        <div class="col-lg-5">
            <textarea class="form-control" placeholder="Keywords ..." required=""></textarea>
            <div class="invalid-feedback">
                Please enter keywords
            </div>
        </div>
    </div>

    <div class="em-separator separator-dashed"></div>

    <div class="form-group row mb-5">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Статус *</label>
        <div class="col-lg-2">
            <div class="custom-control custom-radio styled-radio mb-3">
                <input class="custom-control-input" type="radio" name="options" id="opt-01" required="">
                <label class="custom-control-descfeedback" for="opt-01">Опубликовано</label>
                <div class="invalid-feedback">
                    Опубликовано
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="custom-control custom-radio styled-radio mb-3">
                <input class="custom-control-input" type="radio" name="options" id="opt-02" required="">
                <label class="custom-control-descfeedback" for="opt-02">Не опубликовано</label>
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
