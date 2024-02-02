<x-admin-layout>
    <x-setting heading="مدیریت دسته بندی ها">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                            @if(count($categories) > 0)
                                @foreach ($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="/?category= {{ $category->slug }}">{{$category->name}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$category->posts->count()}}
                                    </td>
                                    {{-- TODO --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ '/admin/categories/' . $category->id . '/edit'}}" class="text-blue-500 hover:text-blue-600">ویرایش</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/admin/categories/{{$category->id}}">
                                        @csrf
                                        @method('DELETE')
                                            <button onclick="return confirm('واقعا میخوای این مطلب رو حذف کنی بره؟')" class="text-xs text-gray-400">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <span>هنوز هیچ دسته بندی در وب سایت قرار داده نشده است.</span>
                                @endif 
                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-admin-layout>
