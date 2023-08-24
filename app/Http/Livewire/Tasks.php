<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Task;

class Tasks extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $status, $state;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
    return view('livewire.tasks.view', [
        'tasks' => Task::latest()
            ->orWhere('name', 'LIKE', $keyWord)
            ->orWhere('status', 'LIKE', $keyWord)
            ->orWhere('state', 'LIKE', $keyWord)
            ->orderBy('status', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(10),
    ]);
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
		$this->name = null;
		$this->status = null;
		$this->state = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
        ]);

        Task::create([
			'name' => $this-> name,
			'status' => 'pendiente',
			'state' => false
        ]);

        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Tarea creada exitosamente.');
    }

    public function edit($id)
    {
        $record = Task::findOrFail($id);
        $this->selected_id = $id;
		$this->name = $record-> name;
		$this->status = $record-> status;
		$this->state = $record-> state;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'status' => 'required',

        ]);

        if ($this->selected_id) {
			$record = Task::find($this->selected_id);
            $record->update([
                'status' => 'completado',
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Tarea actualizada correctamente.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Task::where('id', $id)->delete();
        }
    }
}
