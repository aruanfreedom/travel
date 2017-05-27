<div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="profile-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <div class="col-md-4 col-sm-4">
                        <h4 class="modal-title" id="myModalLabel" tkey="please_enter_data">Пожалуйста заполните данные</h4>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <span class="title-country">
                            <span class="location-modal"></span>
                            <span class="whereAir-modal"></span>
                        </span>
                        <span class="title-date">
                            <span class="sd-modal"></span>
                            <span class="ed-modal"></span>
                        </span>
                        <span class="block-adress">
                            <span class="adress-hotel"></span>
                            <span class="name-hotel"></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label tkey="last-name">Фамилия</label>
                                <input type="text" name="last-name" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label tkey="name">Имя</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label tkey="other-name">Отчество</label>
                                <input type="text" name="other-name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label tkey="sex">Пол</label>
                                <select name="sex" class="form-control">
                                    <option>Мужской</option>
                                    <option>Женский</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label tkey="birthday">Дата рождение</label>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label tkey="number-document">Номер документа</label>
                                <input type="number" name="number-document" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label tkey="telephone">Телефон</label>
                                <input type="number" name="telephone" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label tkey="email">Электронная почта</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label tkey="adults">Взрослые</label>
                                <input type="number" name="adults" class="form-control adults">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="select-data">
                        <div class="row">
                            <div class="col-md-4">
                                <label tkey="childrens">Дети 2-11 лет</label>
                                <input type="number" name="childrens-two" class="form-control childrens-two">
                            </div>
                            <div class="col-md-4">
                                <label tkey="childrens-two">До 2-х лет</label>
                                <input type="number" name="childrens-after" class="form-control childrens-after">
                            </div>
                            <div class="col-md-4" id="bottom-radio">
                                <label>Эконом
                                    <input type="radio" name="class-status">
                                </label>
                                <label>Бизнес
                                    <input type="radio" name="class-status">
                                </label>
                            </div>
                        </div>
                    </div>
                    <h3><span tkey="summa">Цена</span> - <span class="summa-air"></span> <span
                                class="summa-hotel"></span></h3>
                    <div class="alert alert-danger">
                        <strong tkey="error">Ошибка!</strong> <span tkey="error_mes">Заполнили не все поля!</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" tkey="close">Закрыть</button>
                    <button type="submit" class="btn btn-primary" id="order" tkey="reservation">Забронировать</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="alert alert-success">
    <strong tkey="success">Операция прошла успешно!</strong> <span tkey="success_mes">Проверьте пожалуйста почту.</span>
</div>