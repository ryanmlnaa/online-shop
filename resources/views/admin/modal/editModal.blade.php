<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('updateData', $data->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="SKU" class="col-sm-5 col-form-label">Nama Product</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="product_id" name="product_id"
                                value="{{ $data->product_id }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="product_name" class="col-sm-5 col-form-label">Nama Product</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="product_name" name="nama"
                                value="{{ $data->product_name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-5 col-form-label">Merk Product</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="type" name="type">
                                <option value=""> Pilih Merk </option>
                                <option value="AIGNER" {{ $data->product_brand === 'AIGNER' ? 'selected' : '' }}>AIGNER</option>
                                <option value="AIGNER" {{ $data->product_brand === 'AIGNER' ? 'selected' : '' }}>AIGNER</option>
                                <option value="AccessHer" {{ $data->product_brand === 'AccessHer' ? 'selected' : '' }}>AccessHer</option>
                                <option value="Aj DEZInES" {{ $data->product_brand === 'Aj DEZInES' ? 'selected' : '' }}>Aj DEZInES</option>
                                <option value="Alcis" {{ $data->product_brand === 'Alcis' ? 'selected' : '' }}>Alcis</option>
                                <option value="Allen Solly Woman" {{ $data->product_brand === 'Allen Solly Woman' ? 'selected' : '' }}>Allen Solly Woman</option>
                                <option value="Annabelle by Pantaloons" {{ $data->product_brand === 'Annabelle by Pantaloons' ? 'selected' : '' }}>Annabelle by Pantaloons</option>
                                <option value="Arrow" {{ $data->product_brand === 'Arrow' ? 'selected' : '' }}>Arrow</option>
                                <option value="Being Human" {{ $data->product_brand === 'Being Human' ? 'selected' : '' }}>Being Human</option>
                                <option value="Beli" {{ $data->product_brand === 'Beli' ? 'selected' : '' }}>Beli</option>
                                <option value="Bhama Couture" {{ $data->product_brand === 'Bhama Couture' ? 'selected' : '' }}>Bhama Couture</option>
                                <option value="Blackberrys" {{ $data->product_brand === 'Blackberrys' ? 'selected' : '' }}>Blackberrys</option>
                                <option value="Bubblegummers" {{ $data->product_brand === 'Bubblegummers' ? 'selected' : '' }}>Bubblegummers</option>
                                <option value="BuckleUp" {{ $data->product_brand === 'BuckleUp' ? 'selected' : '' }}>BuckleUp</option>
                                <option value="Bvlgari" {{ $data->product_brand === 'Bvlgari' ? 'selected' : '' }}>Bvlgari</option>
                                <option value="Campus Sutra" {{ $data->product_brand === 'Campus Sutra' ? 'selected' : '' }}>Campus Sutra</option>
                                <option value="Carrera" {{ $data->product_brand === 'Carrera' ? 'selected' : '' }}>Carrera</option>
                                <option value="ColorPlus" {{ $data->product_brand === 'ColorPlus' ? 'selected' : '' }}>ColorPlus</option>
                                <option value="Crew STREET" {{ $data->product_brand === 'Crew STREET' ? 'selected' : '' }}>Crew STREET</option>
                                <option value="Crimsoune Club" {{ $data->product_brand === 'Crimsoune Club' ? 'selected' : '' }}>Crimsoune Club</option>
                                <option value="DAVID BECKHAM" {{ $data->product_brand === 'DAVID BECKHAM' ? 'selected' : '' }}>DAVID BECKHAM</option>
                                <option value="DKNY" {{ $data->product_brand === 'DKNY' ? 'selected' : '' }}>DKNY</option>
                                <option value="DOROTHY PERKINS" {{ $data->product_brand === 'DOROTHY PERKINS' ? 'selected' : '' }}>DOROTHY PERKINS</option>
                                <option value="Difference of Opinion" {{ $data->product_brand === 'Difference of Opinion' ? 'selected' : '' }}>Difference of Opinion</option>
                                <option value="DressBerry" {{ $data->product_brand === 'DressBerry' ? 'selected' : '' }}>DressBerry</option>
                                <option value="FIDO DIDO" {{ $data->product_brand === 'FIDO DIDO' ? 'selected' : '' }}>FIDO DIDO</option>
                                <option value="EthnoVogue" {{ $data->product_brand === 'EthnoVogue' ? 'selected' : '' }}>EthnoVogue</option>
                                <option value="GAS" {{ $data->product_brand === 'GAS' ? 'selected' : '' }}>GAS</option>
                                <option value="Gini and Jony" {{ $data->product_brand === 'Gini and Jony' ? 'selected' : '' }}>Gini and Jony</option>
                                <option value="HARBORNBAY" {{ $data->product_brand === 'HARBORNBAY' ? 'selected' : '' }}>HARBORNBAY</option>
                                <option value="HIGHLANDER" {{ $data->product_brand === 'HIGHLANDER' ? 'selected' : '' }}>HIGHLANDER</option>
                                <option value="Homesake" {{ $data->product_brand === 'Homesake' ? 'selected' : '' }}>Homesake</option>
                                <option value="Honey by Pantaloons" {{ $data->product_brand === 'Honey by Pantaloons' ? 'selected' : '' }}>Honey by Pantaloons</option>
                                <option value="Hoopers" {{ $data->product_brand === 'Hoopers' ? 'selected' : '' }}>Hoopers</option>
                                <option value="ID" {{ $data->product_brand === 'ID' ? 'selected' : ''}}>ID</option>
                                <option value="Ishin" {{ $data->product_brand === 'Ishin' ? 'selected' : '' }}>Ishin</option>
                                <option value="JBN Creation" {{ $data->product_brand === 'JBN Creation' ? 'selected' : '' }}>JBN Creation</option>
                                <option value="JC Collection" {{ $data->product_brand === 'JC Collection' ? 'selected' : '' }}>JC Collection</option>
                                <option value="JEWEL JUNCTION" {{ $data->product_brand === 'JEWEL JUNCTION' ? 'selected' : '' }}>JEWEL JUNCTION</option>
                                <option value="Jn Joy"{{ $data->product_brand === 'Jn Joy' ? 'selected' : ''}}>Jn Joy</option>
                                <option value="Kazo" {{ $data->product_brand === 'Kazo' ? 'selected' : '' }}>Kazo</option>
                                <option value="Keds" {{ $data->product_brand === 'Keds' ? 'selected' : '' }}>Keds</option>
                                <option value="Kenneth Cole" {{ $data->product_brand === 'Kenneth Cole' ? 'selected' : '' }}>Kenneth Cole</option>
                                <option value="Kook N Keech Disney" {{ $data->product_brand === 'Kook N Keech Disney' ? 'selected' : '' }}>Kook N Keech Disney</option>
                                <option value="Lady Lyka" {{ $data->product_brand === 'Lady Lyka' ? 'selected' : '' }}>Lady Lyka</option>
                                <option value="Lakme" {{ $data->product_brand === 'Lakme' ? 'selected' : '' }}>Lakme</option>
                                <option value="Lara Karen" {{ $data->product_brand === 'Lara Karen' ? 'selected' : '' }}>Lara Karen</option>
                                <option value="MANGO" {{ $data->product_brand === 'MANGO' ? 'selected' : '' }}>MANGO</option>
                                <option value="MBE" {{ $data->product_brand === 'MBE' ? 'selected' : '' }}>MBE</option>
                                <option value="MIAH Decor" {{ $data->product_brand === 'MIAH Decor' ? 'selected' : '' }}>MIAH Decor</option>
                                <option value="MIMOSA" {{ $data->product_brand === 'MIMOSA' ? 'selected' : '' }}>MIMOSA</option>
                                <option value="Marvel by Wear Your Mind" {{ $data->product_brand === 'Marvel by Wear Your Mind' ? 'selected' : '' }}>Marvel by Wear Your Mind</option>
                                <option value="Mast & Harbour" {{ $data->product_brand === 'Mast & Harbour' ? 'selected' : '' }}>Mast & Harbour</option>
                                <option value="Michael Kors" {{ $data->product_brand === 'Michael Kors' ? 'selected' : '' }}>Michael Kors</option>
                                <option value="Monte Carlo" {{ $data->product_brand === 'Monte Carlo' ? 'selected' : '' }}>Monte Carlo</option>
                                <option value="NEUDIS" {{ $data->product_brand === 'NEUDIS' ? 'selected' : '' }}>NEUDIS</option>
                                <option value="PARFAIT" {{ $data->product_brand === 'PARFAIT' ? 'selected' : '' }}>PARFAIT</option>
                                <option value="Palm Tree" {{ $data->product_brand === 'Palm Tree' ? 'selected' : '' }}>Palm Tree</option>
                                <option value="Park Avenue" {{ $data->product_brand === 'Park Avenue' ? 'selected' : '' }}>Park Avenue</option>
                                <option value="Parx" {{ $data->product_brand === 'Parx' ? 'selected' : '' }}>Parx</option>
                                <option value="Peter England" {{ $data->product_brand === 'Peter England' ? 'selected' : '' }}>Peter England</option>
                                <option value="Peter England Casuals" {{ $data->product_brand === 'Peter England Casuals' ? 'selected' : '' }}>Peter England Casuals</option>
                                <option value="Pink Cow" {{ $data->product_brand === 'Pink Cow' ? 'selected' : '' }}>Pink Cow</option>
                                <option value="Playdate" {{ $data->product_brand === 'Playdate' ? 'selected' : '' }}>Playdate</option>
                                <option value="Puma" {{ $data->product_brand === 'Puma' ? 'selected' : '' }}>Puma</option>
                                <option value="ROMEE" {{ $data->product_brand === 'ROMEE' ? 'selected' : '' }}>ROMEE</option>
                                <option value="Raymond" {{ $data->product_brand === 'Raymond' ? 'selected' : '' }}>Raymond</option>
                                <option value="Roadster" {{ $data->product_brand === 'Roadster' ? 'selected' : '' }}>Roadster</option>
                                <option value="Rocia" {{ $data->product_brand === 'Rocia' ? 'selected' : '' }}>Rocia</option>
                                <option value="Russell Athletic" {{ $data->product_brand === 'Russell Athletic' ? 'selected' : '' }}>Russell Athletic</option>
                                <option value="SASSAFRAS" {{ $data->product_brand === 'SASSAFRAS' ? 'selected' : '' }}>SASSAFRAS</option>
                                <option value="SEJ by Nisha Gupta" {{ $data->product_brand === 'SEJ by Nisha Gupta' ? 'selected' : '' }}>SEJ by Nisha Gupta</option>
                                <option value="SHOWOFF" {{ $data->product_brand === 'SHOWOFF' ? 'selected' : '' }}>SHOWOFF</option>
                                <option value="SIMON CARTER LONDON" {{ $data->product_brand === 'SIMON CARTER LONDON' ? 'selected' : '' }}>SIMON CARTER LONDON</option>
                                <option value="SPYKAR" {{ $data->product_brand === 'SPYKAR' ? 'selected' : '' }}>SPYKAR</option>
                                <option value="Sera" {{ $data->product_brand === 'Sera' ? 'selected' : '' }}>Sera</option>
                                <option value="Shoe Couture" {{ $data->product_brand === 'Shoe Couture' ? 'selected' : '' }}>Shoe Couture</option>
                                <option value="Soie" {{ $data->product_brand === 'Soie' ? 'selected' : '' }}>Soie</option>
                                <option value="Story@home" {{ $data->product_brand === 'Story@home' ? 'selected' : '' }}>Story@home</option>
                                <option value="StyleStone" {{ $data->product_brand === 'StyleStone' ? 'selected' : '' }}>StyleStone</option>
                                <option value="Stylo Bug" {{ $data->product_brand === 'Stylo Bug' ? 'selected' : '' }}>Stylo Bug</option>
                                <option value="Sweet Dreams" {{$data->product_brand === 'Sweet Dreams' ? 'selected' : '' }}>Sweet Dreams</option>
                                <option value="TAYHAA" {{ $data->product_brand === 'TAYHAA' ? 'selected' : '' }}>TAYHAA</option>
                                <option value="THE SILHOUETTE STORE" {{ $data->product_brand === 'THE SILHOUETTE STORE' ? 'selected' : '' }}>THE SILHOUETTE STORE</option>
                                <option value="Tokyo Talkies" {{ $data->product_brand === 'Tokyo Talkies' ? 'selected' : '' }}>Tokyo Talkies</option>
                                <option value="U.S. Polo Assn. Denim Co." {{ $data->product_brand === 'U.S. Polo Assn. Denim Co.' ? 'selected' : '' }}>U.S. Polo Assn. Denim Co.</option>
                                <option value="U.S. Polo Assn. Kids" {{ $data->product_brand === 'U.S. Polo Assn. Kids' ? 'selected' : '' }}>U.S. Polo Assn. Kids</option>
                                <option value="United Colors of Benetton" {{ $data->product_brand === 'United Colors of Benetton' ? 'selected' : '' }}>United Colors of Benetton</option>
                                <option value="Urban Dog" {{ $data->product_brand === 'Urban Dog' ? 'selected' : '' }}>Urban Dog</option>
                                <option value="VASTRAMAY" {{ $data->product_brand === 'VASTRAMAY' ? 'selected' : '' }}>VASTRAMAY</option>
                                <option value="VLCC" {{ $data->product_brand === 'VLCC' ? 'selected' : '' }}>VLCC</option>
                                <option value="Vishudh" {{ $data->product_brand === 'Vishudh' ? 'selected' : '' }}>Vishudh</option>
                                <option value="WITH" {{ $data->product_brand === 'WITH' ? 'selected' : '' }}>WITH</option>
                                <option value="Xpose" {{ $data->product_brand === 'Xpose' ? 'selected' : '' }}>Xpose</option>
                                <option value="YAK YAK" {{ $data->product_brand === 'YAK YAK' ? 'selected' : '' }}>YAK YAK</option>
                                <option value="ZUSH" {{ $data->product_brand === 'ZUSH' ? 'selected' : '' }}>ZUSH</option>
                                <option value="Zippo" {{$data->product_brand === 'Zippo' ? 'selected' : '' }}>Zippo</option>
                                <option value="ahilya" {{ $data->product_brand === 'ahilya' ? 'selected' : '' }}>ahilya</option>
                                <option value="berrytree" {{ $data->product_brand === 'berrytree' ? 'selected' : '' }}>berrytree</option>
                                <option value="ether" {{ $data->product_brand === 'ether' ? 'selected' : '' }}>ether</option>
                                <option value="even" {{ $data->product_brand === 'even' ? 'selected' : '' }}>even</option>
                                <option value="her by invictus" {{ $data->product_brand === 'her by invictus' ? 'selected' : '' }}>her by invictus</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gender" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="kategori" name="kategori">
                                <option value=""> Jenis Kelamin </option>
                                <option value="Pria" {{ $data->gender === 'Pria' ? 'selected' : '' }}>Pria</option>
                                <option value="Wanita" {{ $data->gender === 'wanita' ? 'selected' : '' }}>Wanita </option>
                                <option value="Unisex" {{ $data->gender === 'Unisex' ? 'selected' : '' }}>Unisex</option>
                                <option value="Anak Laki-laki" {{ $data->gender === 'Anak Laki-laki' ? 'selected' : '' }}>Anak Laki-laki</option>
                                <option value="Anak Perempuan" {{ $data->gender === 'Anak Perempuan' ? 'selected' : '' }}>Anak Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-5 col-form-label">Harga</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ $data->price }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-5 col-form-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ $data->description }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="primary_color" class="col-sm-5 col-form-label">Warna</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="primary_color" name="primary_color"
                                value="{{ $data->primary_color }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_pakaian" class="col-sm-5 col-form-label">Warna</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="jenis_pakaian" name="jenis_pakaian"
                                value="{{ $data->jenis_pakaian }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-5 col-form-label">Qty Product</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                value="{{ $data->quantity }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-5 col-form-label">Foto Product</label>
                        <div class="col-sm-7">
                            <input type="hidden" name="foto" value="{{$data->foto}}">
                            <img src="{{ asset('storage/product/' . $data->foto) }}" class="mb-2 preview"
                                style="width: 100px;">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="inputFoto"
                                name="foto" onchange="previewImg()">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImg() {
        const fotoIn = document.querySelector('#inputFoto');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(fotoIn.files[0]);

        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
}
</script>
