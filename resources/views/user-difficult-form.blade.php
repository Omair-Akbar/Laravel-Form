<div style="background-color: #f4f4f9; height: 100vh; display: flex; justify-content: center; align-items: center; font-family: Arial, sans-serif;">
    <div style="background-color: #ffffff; padding: 30px; width: 400px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;">
        <h2 style="text-align: center; color: #333;">User Information Form</h2>

        <form method="post" action="addUser">
            @csrf

            <!-- Name Field -->
            <label for="name" style="font-weight: bold; color: #333;">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                   style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            @error('name')
                <div style="color: #e74c3c; font-size: 14px; margin-bottom: 15px;">{{ $message }}</div>
            @enderror

            <!-- Email Field -->
            <label for="email" style="font-weight: bold; color: #333;">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                   style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            @error('email')
                <div style="color: #e74c3c; font-size: 14px; margin-bottom: 15px;">{{ $message }}</div>
            @enderror

            <!-- Age Field -->
            <label for="age" style="font-weight: bold; color: #333;">Age:</label>
            <input type="number" name="age" id="age" value="{{ old('age') }}"
                   style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            @error('age')
                <div style="color: #e74c3c; font-size: 14px; margin-bottom: 15px;">{{ $message }}</div>
            @enderror

            <!-- Skills Field -->
            <label for="skills" style="font-weight: bold; color: #333;">Skills:</label>
            <select name="skills[]" id="skills"
                    style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
                <option value="php">PHP</option>
                <option value="python">Python</option>
                <option value="java">Java</option>
                <option value="javascript">JavaScript</option>
            </select>
            @error('skills')
                <div style="color: #e74c3c; font-size: 14px; margin-bottom: 15px;">{{ $message }}</div>
            @enderror

            <!-- Submit Button -->
            <button type="submit" style="width: 100%; background-color: #28a745; color: #fff; padding: 10px; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
                Submit
            </button>
        </form>
    </div>
</div>
