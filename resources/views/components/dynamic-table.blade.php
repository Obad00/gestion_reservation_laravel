@props(['headers', 'donnee', 'columns', 'actions'])


<table class="min-w-full divide-y shadow-xl  p-8 divide-gray-200 overflow-x-auto">
    <thead class="bg-gray-50">
        <tr>
            <th></th>
            @foreach ($headers as $header)
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{ $header }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="bg-white divide-y my-7 divide-gray-200">
        @foreach ($donnee as $item)
            <div class=" pt-2 flex-shrink-0 h-10 w-10">

                <tr>


                    <td class="pl-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 15H11V11H15V9H11V5H9V9H5V11H9V15ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20ZM10 18C12.2333 18 14.125 17.225 15.675 15.675C17.225 14.125 18 12.2333 18 10C18 7.76667 17.225 5.875 15.675 4.325C14.125 2.775 12.2333 2 10 2C7.76667 2 5.875 2.775 4.325 4.325C2.775 5.875 2 7.76667 2 10C2 12.2333 2.775 14.125 4.325 15.675C5.875 17.225 7.76667 18 10 18Z"
                                fill="#E06F1F" />
                        </svg>
            </div>
            </td>
            @foreach ($columns as $column)
                <td class="px-6 py-4 whitespace-nowrap">

                    {{ $item->$column }}
                </td>
            @endforeach
            <td class="px-6 gap-3 pt-6 whitespace-nowrap flex text-sm font-medium">
                @foreach ($actions as $action)
                    <a href="{{ $action['url']($item) }}" class="{{ $action['class'] }}">
                        {!! $action['icon'] !!}
                    </a>
                @endforeach
            </td>
            </tr>
        @endforeach
    </tbody>
</table>