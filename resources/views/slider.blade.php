<div class="row">
    <div class="col-md-12 bg-info">
        <h2 class="text-center">Laravel-9 Ajax Product Filter With Price Range Slider</h2>
    </div>
    <div class="col-md-5 mb-3">
        <div class="middle">
            <div id="multi_range">
                <span id="left_value">25</span><span> ~ </span><span id="right_value">75</span>
            </div>
            <div class="multi-range-slider my-2">
                <input type="range" id="input_left" class="range_slider" min="0" max="100" value="25" onmousemove="left_slider(this.value)">
                <input type="range" id="input_right" class="range_slider" min="0" max="100" value="75" onmousemove="right_slider(this.value)">
{{--                <input type="range" id="input_left" class="range_slider" min="0" max="100" value="25">--}}
{{--                <input type="range" id="input_right" class="range_slider" min="0" max="100" value="75">--}}
                <div class="slider">
                    <div class="track"></div>
                    <div class="range"></div>
                    <div class="thumb left"></div>
                    <div class="thumb right"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 mt-4 pt-2">
        <div class="middle">
            <div class="multi-range-slider my-2">
                <select name="sort_by" id="sort_by" class="form-control">
                    <option value="">Sort By</option>
                    <option value="highest_price">Highest Price</option>
                    <option value="lowest_price">Lowest Price</option>
                </select>
            </div>
        </div>
    </div>
</div>
