<script setup>
import { Inertia } from '@inertia/inertia';

const TaskList = ({ tasks }) => {
  return (
    <div>
      <ul>
        {tasks.map((task) => (
          <li key={task.id}>{task.name}</li>
        ))}
      </ul>
    </div>
  );
};

Inertia.page((props) => <TaskList tasks={props.tasks} />);
</script>
<template>
    <!-- //view result -->
    <a href="/tasks/1">View task</a>


 <!-- laravel part  -->
    public function create()
{
    return Inertia::render('tasks/Create');
}

public function store()
{
    // code
}
</template>