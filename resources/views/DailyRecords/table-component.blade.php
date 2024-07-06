<table class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
            <th>Date</th>
            <th>Male Count</th>
            <th>Female Count</th>
            <th>Average Male Age</th>
            <th>Average Female Age</th>
        </tr>
    </thead>
    <tbody id="userTable" class="fw-bold text-gray-600 draggable-zone">
        @foreach ($data as $index => $each)
            <tr class="draggable w-100">
                <td>{{ $each->date }}</td>
                <td>{{ $each->male_count }}</td>
                <td>{{ $each->female_count }}</td>
                <td>{{ $each->male_avg_age }}</td>
                <td>{{ $each->female_avg_age }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
