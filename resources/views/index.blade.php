@include('partials.header')

        <section class="">
            <div class="">
                <form action="{{ route('saveTask') }}" method="POST" class="py-10">
                    @csrf
                    <div class="flex flex-col w-80 m-auto">
                      <input type="text" name="taskname" placeholder="Task" class="p-3 border-solid border-2 border-gray-200 rounded" autocomplete="off">
                      <button type="submit" class="p-2  mt-3 bg-red-600 text-white rounded hover:bg-red-800 font-bold">Save</button>
                    </div>
                  </form>

                  <table class="table-auto m-auto border-solid border-2 border-slate-100">
                    <thead class="border-solid border-2 border-gray-200">
                      <tr>
                        <th class="border-solid border-2 border-gray-200 w-96 text-left p-2 text-slate-100">Task</th>
                        <th class="border-solid border-2 border-gray-200 w-40 text-slate-100">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($tasks)
                      @foreach($tasks as $task)
                          <tr>
                            <td class="border-solid border-2 border-gray-200 pt-5 pb-5 text-left p-2 text-slate-100">{{ $task->name }}</td>
                            <td class="border-solid border-2 border-gray-200 p-2">
                                <div class="flex justify-center">
                                    <a href="" class="bg-blue-400 p-1 text-slate-100 rounded hover:bg-blue-600 text-sm font-bolder mx-1">Update</a>  
                                    <a href="{{ route('deleteTask', $task->id) }}" class="bg-red-400 p-1 text-slate-100 rounded hover:bg-red-600 text-sm font-bolder mx-1">Delete</a>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                          @endif
                    </tbody>
                </table>
            </div>
        </section>

@include('partials.footer')