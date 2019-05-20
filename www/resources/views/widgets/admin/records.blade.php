<div class="row flex-row">
    <div class="col-xl-12">
        <div class="widget widget-07 has-shadow">
            <div class="widget-header bordered d-flex align-items-center">
                <h2>Последние статьи</h2>
                <div class="widget-options">
                    <div class="btn-group" role="group"></div>
                </div>
            </div>
            <div class="widget-body">
                <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th>
                                <div class="styled-checkbox mt-2">
                                    <input type="checkbox" name="check-all" id="check-all">
                                    <label for="check-all"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Создано</th>
                            <th><span style="width:150px;">Статус</span></th>
                            <th>Просмотров</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(count($result))
                            @foreach($result as $obj)
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb2" id="cb2">
                                            <label for="cb2"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">{{ $obj->id }}</span></td>
                                    <td>{{ $obj->name }}</td>
                                    <td>{{ date('F j, Y, g:i a', strtotime($obj->created_at)) }}</td>
                                    <td><span style="width:150px;"><span
                                                class="badge-text badge-text-small {{ $obj->status == 0 ? 'danger' : 'success'}}">{{ $obj->status == 0 ? 'Не опубликовано' : 'Опубликовано'}}</span></span></td>
                                    <td>{{ $obj->views }}</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
