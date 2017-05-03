<section class="search-route">
        <div class="container">
            <div>
                <h2 class="title-page">Купить или забронировать авиабилеты онлайн в Казахстане</h2>
                <div class="tabs-air">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home" class="uppercase">Туда и обратно</a></li>
                        <li><a data-toggle="tab" href="#menu1" class="uppercase">В одну сторону</a></li>
                        <li><a data-toggle="tab" href="#menu2" class="uppercase">Несколько полетов</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <form class="content-search-travel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="whence">Откуда</label>
                                            <input type="text" class="form-control" id="whence" placeholder="Алматы">
                                            <i class="fa fa-arrows-h icon-arrow" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="where">Куда</label>
                                            <input type="text" class="form-control" id="where" placeholder="Астана">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="start-date">Дата отправление</label>
                                            <input type="date" class="form-control" id="start-date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="end-date">Когда обратно</label>
                                            <input type="date" class="form-control" id="end-date">
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
                                            <label for="location-route">Откуда</label>
                                            <input type="text" class="form-control" id="location-route"
                                                   placeholder="Алматы">
                                            <i class="fa fa-arrow-right icon-arrow" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="where-two">Куда</label>
                                            <input type="text" class="form-control" id="where-two" placeholder="Астана">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="one-start-date">Дата отправление</label>
                                            <input type="date" class="form-control" id="one-start-date">
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
                                                    <label for="one-whence">Откуда</label>
                                                    <input type="text" class="form-control" id="one-whence"
                                                           placeholder="Алматы">
                                                    <i class="fa fa-arrow-right icon-arrow" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="one-where">Куда</label>
                                                    <input type="text" class="form-control" id="one-where"
                                                           placeholder="Астана">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="one-end-date">Дата отправление</label>
                                                    <input type="date" class="form-control" id="one-end-date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-new"></div>
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="add-route">Добавить маршрут</a>
                        </div>
                        
                        <form class="content-search-travel">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="adulds">Взрослые</label>
                                        <input type="number" class="form-control" id="adulds" min="0" value="1">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="childrens">Дети 2-11 лет</label>
                                        <input type="number" class="form-control" id="childrens" min="0" value="0">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="childrens-two">До 2-х лет</label>
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
                                                id="search-route" data-toggle="modal" data-target="#myModal">Найти билет
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--<div class="col-md-12">
                    <div class="hgroup">
                        <h1 class="h1">Поиск пакетных туров по сайту</h1>
                        <h2 class="h2">Введите в поиск название страны или города</h2>
                        <div class="input-group inpt-search-home">
                          <input type="text" class="form-control search-home-big" placeholder="Введите текст поиска">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><svg id="searck-btn" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.02 510.33"><defs><style>.cls-1{fill:#fff;}</style></defs><title>search</title><path class="cls-1" d="M501.3,454.4,367.6,320.7c23.9-33.4,38.2-74,38.2-117a202.9,202.9,0,1,0-202.9,203c43,0,83.5-14.3,117-38.2L453.6,502.2c11.9,11.9,33.4,11.9,47.7,0h0C515.6,487.8,515.6,468.7,501.3,454.4ZM202.9,358.9A155.2,155.2,0,1,1,358,203.8,154.9,154.9,0,0,1,202.9,358.9Z" transform="translate(0 -0.8)"/></svg></button>
                          </span>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Результаты поиска</h4>
      </div>
      <div id="result" class="modal-body">
        <p>Нет билетов с такими параметрами</p>
          <table id="result-search" class="table table-bordered">
              <thead>
              <tr>
                  <th>Откуда</th>
                  <th>Куда</th>
                  <th>Дата отправление</th>
                  <th>Когда обратно</th>
                  <th>Класс</th>
                  <th>Действие</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>