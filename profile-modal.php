<div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="profile-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Пожалуйста заполните данные
                        <span class="title-country">
                            <span class="location-modal"></span>
                            <span class="whereAir-modal"></span>
                        </span>
                        <span class="title-date">
                            <span class="sd-modal"></span>
                            <span class="ed-modal"></span>
                        </span>
                    </h4>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Фамилия</label>
                                <input type="text" name="last-name" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Имя</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Отчество</label>
                                <input type="text" name="other-name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Пол</label>
                                <select name="sex" class="form-control">
                                    <option>Мужской</option>
                                    <option>Женский</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Дата рождение</label>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Номер документа</label>
                                <input type="number" name="number-document" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Телефон</label>
                                <input type="number" name="telephone" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Электронная почта</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Взрослые</label>
                                <input type="number" name="adults" class="form-control adults">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="select-data">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Дети 2-11 лет</label>
                                <input type="number" name="childrens-two" class="form-control childrens-two">
                            </div>
                            <div class="col-md-4">
                                <label>До 2-х лет</label>
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
                    <div class="alert alert-danger">
                        <strong>Ошибка!</strong> Заполнили не все поля!
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary" id="order">Забронировать</button>
                </div>
            </form>
        </div>
    </div>
</div>