<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-@yield('modalSize')" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">@yield('modalTitle')</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @yield('modalContent')
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-success custom-btn-submit" form="updateForm">Update changes</button>
        </div>
      </div>
    </div>
  </div>