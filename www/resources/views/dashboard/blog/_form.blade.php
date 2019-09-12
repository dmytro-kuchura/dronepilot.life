<form class="needs-validation" enctype="multipart/form-data" method="post" action="{{ $action }}">
    @csrf

    @if(!empty($result) && $result->id)
        <input type="hidden" name="id" value="{{ $result->id }}">
    @endif

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Название</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" name="name"
                   value="{{ !empty($result) && $result->name ? $result->name : '' }}"
                   placeholder="Название">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Ссылка</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" name="alias"
                   value="{{ !empty($result) && $result->alias ? $result->alias : '' }}"
                   placeholder="Ссылка">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Контент</label>
        <div class="col-lg-7">
            <textarea class="form-control" id="editor" name="content" placeholder="Контент"
            >{{ !empty($result) && $result->content ? $result->content : '' }}</textarea>
        </div>
    </div>

    <div class="em-separator separator-dashed"></div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Title</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" name="title"
                   value="{{!empty($result) &&  $result->title ? $result->title : '' }}"
                   placeholder="Title">
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Description</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="description" placeholder="Description"
                      required="">{{ !empty($result) && $result->description ? $result->description : '' }}</textarea>
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Keywords</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="keywords" placeholder="Keywords ..."
                      required="">{{ !empty($result) && $result->keywords ? $result->keywords : '' }}</textarea>
        </div>
    </div>

    <hr>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Категория</label>
        <div class="col-lg-7">
            <select class="form-control" name="category_id">
                <option value="0">Не выбрано</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ !empty($result) && $result->category_id ? 'selected' : '' }} >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Тэги</label>
        <div class="col-lg-7">
            <select class="form-control" name="tag_ids" multiple>
                <option value="0">Не выбрано</option>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <hr>

    @if(!!empty($result->image))
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
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input"
                       {{ !empty($result) && $result->status == 1 ? 'checked=""' : '' }} name="status">Показывать
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input"
                       {{ !empty($result) && $result->status == 0 ? 'checked=""' : '' }} name="status">Не показывать
            </label>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3"></label>
        <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
            <span class="text">Сохранить</span>
        </button>
        &nbsp;
        <a href="{{ route('blog.list') }}" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
            <span class="text">Вернуться</span>
        </a>
    </div>
</form>
