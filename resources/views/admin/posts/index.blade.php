<x-admin-layout>
    <x-setting heading="مدیریت مطالب">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">   
                            @if(count($posts) > 0)
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            @if(isset($post->thumbnail))
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                    src="{{ secure_asset('storage/' . $post->thumbnail)}}"
                                                    alt="">
                                            </div>
                                            @endif
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="/posts/{{ $post->slug }}">{{$post->title}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- TODO --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-500 text-green-100">
                                            {{$post->category->name}}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Published
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ '/admin/posts/' . $post->id . '/edit'}}" class="text-blue-500 hover:text-blue-600">ویرایش</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/admin/posts/{{$post->id}}">
                                        @csrf
                                        @method('DELETE')
                                            <button onclick="return confirm('واقعا میخوای این مطلب رو حذف کنی بره؟')" class="text-xs text-gray-400">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <span>هنوز هیچ پستی در وب سایت قرار داده نشده است.</span>
                                @endif 
                                    <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $posts->links() }}
        </div>
    </x-setting>
</x-admin-layout>
