<div class="container">
    <div class="row mb-3">
        <div class="col">
            <form action="{{ Request::url() }}">
                <div class="input-group input-group-lg shadow-sm rounded mt-3">
                    <input name="q" type="search" class="form-control" aria-label="Кофтан" aria-describedby="inputGroup-search" placeholder="{{ $search_text }}" value="{{ isset($_GET['q']) ? $_GET['q'] : '' }}">

                    <div class="input-group-append">
                        <select name="searchType" class="btn btn-outline-success">
                            <option value="2">Contains</option>
                            <option value="1">Begins with</option>
                            <option value="3">Ends with</option>
                        </select>

                        <button class="btn btn-success" type="submit">Кофтан</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>