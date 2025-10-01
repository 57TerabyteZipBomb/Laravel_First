<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <x-new-profile :nama="$nama" :sekolah="$sekolah" :kelas="$kelas" :absen="$absen" />
</x-layout>