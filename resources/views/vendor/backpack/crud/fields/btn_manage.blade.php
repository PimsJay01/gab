<div @include('crud::inc.field_wrapper_attributes') >

    <a
        href="{{ url('/admin/' . $field['name']) }}"
        class="btn btn-sm btn-default btn-manage-linked-entity"
        target="_blank"
        @include('crud::inc.field_attributes')
    >Manage</a>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>

@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))
  {{-- FIELD EXTRA CSS  --}}
  {{-- push things in the after_styles section --}}

      @push('crud_fields_styles')
          <!-- no styles -->
      @endpush


  {{-- FIELD EXTRA JS --}}
  {{-- push things in the after_scripts section --}}

      @push('crud_fields_scripts')
        <script>
          jQuery(document).ready(function($){
              $('.btn-manage-linked-entity').click(function(event){
                  event.preventDefault();

                  var href = $(this).attr('href');
                  var modal = $('.modal-manage-linked-entity');
                  var iframe = modal.find('iframe')

                  iframe.load(function() {
                      var iframeContents = iframe.contents();

                      var content = iframeContents.find('section.content').detach();
                      iframeContents.find('.wrapper').css('background-color', 'white').empty().append(content);
                      iframeContents.find('.box')
                          .css('border', 'none')
                          .css('box-shadow', 'none')
                          .children().css('border', 'none');

                      iframe.show();
                      iframe.height(content.height() + 25);
                  });

                  modal.on('hide.bs.modal', function (event) {
                      event.preventDefault();

                      iframe.hide();

                      var btn = $('[data-value="save_and_edit"]');
                      if(btn.is('a'))
                          btn[0].click();
                      else
                          btn[0].click();

                      return false;
                  })

                  iframe.attr('src', href);
                  modal.modal('show');

                  return false;
              });
          });
        </script>

        <div class="modal modal-manage-linked-entity fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Manage sub-entity</h4>
              </div>
              <div class="modal-body" style="padding: 0">
                <iframe display="none" style="border: none" width="100%"></iframe>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      @endpush
@endif
