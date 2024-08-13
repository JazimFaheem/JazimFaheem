@php
    $key = 1;
@endphp
@foreach (session()->get('attributes') as  $row)

    <div id="accordion" class="attribute_tab">
        <div class="card card-primary">
            <div class="card-header">
                <h4 class="card-title w-100" id="attributehead{{ $key }}">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#attribute{{$key}}"
                        aria-expanded="false">
                        {{ $row['name'] }}
                        <a href="javascript:;" id="remove_attribute"
                            style="color:red;font-size:14px;float:right"><u>Remove</u></a>
                    </a>
                </h4>
            </div>
            <div id="attribute{{$key}}" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="attname" class="form-label">Name</label>
                            <input type="text" class="form-control attribute_name" id="attname"
                                placeholder="f.e. Size or Color" name="attribute_name" value="{{ $row['name'] }}">

                            <div class="row mt-4">
                                <div class="form-check">
                                    <input class="form-check-input is_visible" type="checkbox"
                                        id="is_visible{{$key}}" name="is_visible" @if ($row['is_visible'] == 'yes') checked value="Yes" @else value="No" @endif>
                                    <label class="form-check-label" for="is_visible{{$key}}">Visible on the
                                        product page</label>
                                </div>


                                <div class="form-check variationcheck">
                                    <input class="form-check-input for_variation" type="checkbox"
                                        id="for_variation{{$key}}" name="for_variation"  @if ($row['is_for_variation'] == 'yes') checked value="Yes" @else value="No" @endif>
                                    <label class="form-check-label" for="for_variation{{$key}}">Use for
                                        variations</label>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-7">
                            <label for="attvalue" class="form-label">Values</label>
                            <textarea name="attribute_values" id="attvalue" class="form-control attribute_values" rows="5"
                                placeholder="Enter options for customers to choose from, f.e. “Blue” or “Large”. Use “|” to separate different options.">{{ $row['values'] }}</textarea>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @php
        $key ++;
    @endphp
@endforeach

<script>
    $(document).ready(function() {
        if ($('.ptype').val() == 'simple') {
            $('.variationcheck').css('display', 'none');
        } else {
            $('.variationcheck').css('display', 'block');
        }
    });
</script>
