<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat') }}
        </h2>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Riwayat</h1>
                    {{-- <h5>editor: {{ $name }} | {{ $email }}</h5> --}}
                      <hr/>
                      @foreach($articles as $article)
                          <article class="mb-5">
                              <h3>
                                    id pasien: {{ $article->pasien_id }}              
                              </h3>
                              {{-- <h6>By: {{ !empty($article->user)? $article->user->name:'' }}</h6> --}}
                              <h6> id dokter pengurus: {{ $article->dokter_id }}</h6>
                              <p>kondisi kesehatan: {{ $article->kondisiKesehatan }}</p>
                              <p>suhu: {{ $article->suhu }}</p>
                              <p>gambar : {{ $article->gambar }}</p>
                              <br>
                          </article>
                      @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>