<section class="search-route">
        <div class="container">
            <div>
                <h2 class="title-page" tkey="bye_and_air">Купить или забронировать авиабилеты онлайн в Казахстане</h2>
                <div class="tabs-air">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home" class="uppercase" tkey="roundtrip">Туда и обратно</a></li>
                        <li><a data-toggle="tab" href="#menu1" class="uppercase" tkey="one_way">В одну сторону</a></li>
                        <li><a data-toggle="tab" href="#menu2" class="uppercase" tkey="several_flights">Несколько полетов</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <form class="content-search-travel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="whence" tkey="whence">Откуда</label>
                                            <input type="text" class="form-control whence" id="whence">
                                            <i class="fa fa-arrows-h icon-arrow" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="where" tkey="where">Куда</label>
                                            <input type="text" class="form-control where" id="where" >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="start-date" tkey="start-date">Отъезд</label>
                                            <input type="date" class="form-control start-date" id="start-date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="end-date" tkey="end-date">Въезд</label>
                                            <input type="date" class="form-control end-date" id="end-date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <form class="content-search-travel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="location-route" tkey="whence">Откуда</label>
                                            <input type="text" class="form-control whence" id="location-route"
                                                   >
                                            <i class="fa fa-arrow-right icon-arrow" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="where-two" tkey="where">Куда</label>
                                            <input type="text" class="form-control where" id="where-two" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="one-start-date" tkey="start-date">Отъезд</label>
                                            <input type="date" class="form-control start-date" id="one-start-date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <form class="content-search-travel">
                                <div class="row">
                                    <div class="add-origin">
                                        <div class="add-prototype">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="one-whence" tkey="whence">Откуда</label>
                                                    <input type="text" class="form-control whence" id="one-whence"
                                                           >
                                                    <i class="fa fa-arrow-right icon-arrow" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="one-where" tkey="where">Куда</label>
                                                    <input type="text" class="form-control where" id="one-where"
                                                           >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="one-end-date" tkey="start-date">Отъезд</label>
                                                    <input type="date" class="form-control start-date" id="one-end-date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-new"></div>
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="add-route" tkey="add-route">Добавить маршрут</a>
                        </div>
                        
                        <form class="content-search-travel">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="adulds" tkey="adulds">Взрослые</label>
                                        <input type="number" class="form-control" id="adulds" min="0" value="1">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="childrens" tkey="childrens">Дети 2-11 лет</label>
                                        <input type="number" class="form-control" id="childrens" min="0" value="0">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="childrens-two" tkey="childrens-two">До 2-х лет</label>
                                        <input type="number" min="0" value="0" class="form-control" id="childrens-two">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="center-middle">
                                        <div class="col-md-6">
                                            <label>Эконом
                                                <input type="radio" name="travel-class" value="Эконом" checked>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Бизнес
                                                <input type="radio" name="travel-class" value="Бизнес">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg"
                                                id="search-route" data-toggle="modal" data-target="#tickets-modal" tkey="tickets_search">Найти билет
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- Modal -->
<div class="modal fade" id="tickets-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" tkey="result_search">Результаты поиска</h4>
      </div>
      <div id="result" class="modal-body result">
        <p class="status-message">Нет билетов с такими параметрами</p>
          <table class="table table-bordered result-search">
              <thead>
              <tr>
                  <th tkey="whence">Откуда</th>
                  <th tkey="where">Куда</th>
                  <th tkey="start-date">Отъезд</th>
                  <th tkey="end-date">Въезд</th>
                  <th tkey="class">Класс</th>
                  <th tkey="summa">Цена</th>
                  <th tkey="event">Действие</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" tkey="close">Закрыть</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<?php include("profile-modal.php");?>
