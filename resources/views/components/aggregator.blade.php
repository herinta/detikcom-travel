<section class="aggregator">
    <div class="px-3 px-md-5">
        <div class="d-flex align-items-center fs-1 fw-bold gap-3 mb-4">
            <img src="images/logo.png" alt="" />
            <span class="orange-text">Update</span>
        </div>
        <div class="d-md-flex gap-4">
            <div class="col-12 col-md-6">
                <div class="berita_utama">
                    <img class="img-fluid" src="images/article-1.png" alt="Gambar Artikel" />
                    <div class="overlay article_title">
                        <div class="">
                            <h4>Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan</h4>
                            <small>3 jam yang lalu</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column gap-6">
                @php
                    $articles = [
                        [
                            'image' => 'images/article-2.png',
                            'title' => 'Thailand Ngarep Cuan Banyak dari Turis China dan Jepang',
                            'time' => '1 jam yang lalu',
                        ],
                        [
                            'image' => 'images/article-3.png',
                            'title' => 'Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisak',
                            'time' => '1 jam yang lalu',
                        ],
                        [
                            'image' => 'images/article-4.png',
                            'title' => 'Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand',
                            'time' => '1 jam yang lalu',
                        ]
                    ];
                @endphp

                @foreach($articles as $article)
                    <x-article-card 
                        :image="$article['image']" 
                        :title="$article['title']" 
                        :time="$article['time']" 
                    />
                @endforeach

                <a href="" class="btn-secondary">Lihat Berita Lainnya</a>
            </div>
        </div>
    </div>
</section>
