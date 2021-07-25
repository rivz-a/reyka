  <!-- Modal Заявка на ремонт -->
  <div class="modal fade" id="exampleModalCenterZayavka" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered bd-example-modal-lg modal-lg" role="document">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Заявка на ремонт</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body zayavka-modal">
            <?= $this->element('contactmail'); ?>
           
            
        </div>            
      </div>
    </div>
  </div>