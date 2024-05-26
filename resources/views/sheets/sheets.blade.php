<table>
    <thead>
        <tr>
            <th>.</th>
            <th>.</th>
            <th>スクリーン</th>
            <th>.</th>
            <th>.</th>

        </tr>
    </thead>
    <tbody>
        @php
            $output = [];
            foreach ($sheets as $sheet) {
                $row = $sheet->row;
                $column = $sheet->column;
                $output[$row][$column] = $row . '-' . $column;
                // var_dump($output);
                // { ["a"]=> array(1) { [1]=> string(3) "a-1" } }
                // a-1, a-1, a-2, a-1, a-2, a-3, ...
            }
        @endphp
        @foreach ($output as $row => $columns)
            {{-- The $row variable is used as the key, and the $columns array is the value. --}}
            {{-- 'a' => ['a-1', 'a-2', 'a-3', 'a-4', 'a-5'] --}}
            {{-- 'b' => ['b-1', 'b-2', 'b-3', 'b-4', 'b-5'] --}}
            {{-- 'c' => ['c-1', 'c-2', 'c-3', 'c-4', 'c-5'] --}}
            <tr>
                @php
                    // https://www.php.net/manual/en/function.ksort.php
                    // ksort — Sort an array by key in ascending order
                    ksort($columns);
                    // var_dump($columns)
                    // array(5) { [1]=> string(3) "a-1" [2]=> string(3) "a-2" [3]=> string(3) "a-3" [4]=> string(3) "a-4" [5]=> string(3) "a-5" }
                    // array(5) { [1]=> string(3) "b-1" [2]=> string(3) "b-2" [3]=> string(3) "b-3" [4]=> string(3) "b-4" [5]=> string(3) "b-5" }
                    // array(5) { [1]=> string(3) "c-1" [2]=> string(3) "c-2" [3]=> string(3) "c-3" [4]=> string(3) "c-4" [5]=> string(3) "c-5" }
                @endphp
                @foreach ($columns as $column => $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
