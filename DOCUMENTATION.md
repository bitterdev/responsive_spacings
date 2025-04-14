## Responsive Spacings Add-on for Concrete CMS

This add-on, named **Responsive Spacings**, provides a set of CSS utility classes to control margins and paddings for blocks and areas in Concrete CMS. It allows developers and editors to apply consistent and responsive spacing to their website layouts directly through the Concrete CMS interface.

## Installation

1. Install the **Responsive Spacings** add-on via the Concrete CMS marketplace or by uploading it to your Concrete CMS installation.
2. Activate the add-on in the Dashboard under "Extend Concrete" > "Add Functionality."
3. The CSS classes are automatically available for use on blocks and areas in the Concrete CMS editor.

## Using the CSS Classes

The CSS classes can be applied to **blocks** (e.g., content blocks, image blocks) or **areas** (layout sections) in Concrete CMS. To apply a class:

1. Edit a block or area in the Concrete CMS editor.
2. Open the block’s or area’s "Design" or "Custom CSS" settings.
3. Add the desired spacing class (e.g., `concrete-m-1`) to the "CSS Class" field.
4. Save and publish the changes.

## Available Classes

The add-on generates utility classes for **margins** and **paddings**, with support for responsive scaling across different screen sizes. Classes follow a consistent naming convention and provide fine-grained control over spacing.

### Margin Classes

Margin classes start with `concrete-m-` and control the margin of an element. They can be applied to all sides, specific sides, or axes (horizontal/vertical). Negative margins are also supported.

- Full margin:
    - `concrete-m-<size>`: Applies margin to all sides (e.g., `concrete-m-1` for 1rem margin).
- Specific sides:
    - `concrete-mt-<size>`: Margin top (e.g., `concrete-mt-0-5` for 0.5rem top margin).
    - `concrete-mb-<size>`: Margin bottom.
    - `concrete-ml-<size>`: Margin left.
    - `concrete-mr-<size>`: Margin right.
- Axes:
    - `concrete-mx-<size>`: Margin left and right (e.g., `concrete-mx-2` for 2rem horizontal margin).
    - `concrete-my-<size>`: Margin top and bottom.
- Negative margins:
    - `concrete-mn-<size>`: Negative margin on all sides (e.g., `concrete-mn-1` for -1rem margin).
    - `concrete-mnt-<size>`: Negative margin top.
    - `concrete-mnb-<size>`: Negative margin bottom.
    - `concrete-mnl-<size>`: Negative margin left.
    - `concrete-mnr-<size>`: Negative margin right.

### Padding Classes

Padding classes start with `concrete-p-` and control the padding of an element. They are similar to margin classes but do not support negative values.

- Full padding:
    - `concrete-p-<size>`: Applies padding to all sides (e.g., `concrete-p-1-5` for 1.5rem padding).
- Specific sides:
    - `concrete-pt-<size>`: Padding top.
    - `concrete-pb-<size>`: Padding bottom.
    - `concrete-pl-<size>`: Padding left.
    - `concrete-pr-<size>`: Padding right.
- Axes:
    - `concrete-px-<size>`: Padding left and right.
    - `concrete-py-<size>`: Padding top and bottom.

### Size Values

The `<size>` in class names corresponds to spacing values in increments of 0.5rem, from 0.5rem to 50rem. The class names use a dash (`-`) to represent decimal points for compatibility with CSS.

- Examples:
    - `0-5`: Represents 0.5rem (e.g., `concrete-m-0-5` for 0.5rem margin).
    - `1`: Represents 1rem (e.g., `concrete-p-1` for 1rem padding).
    - `1-5`: Represents 1.5rem (e.g., `concrete-m-1-5` for 1.5rem margin).
    - `2`: Represents 2rem.
    - Up to `50`: Represents 50rem.

## Responsive Behavior

The spacing classes are responsive and adjust based on the screen size using predefined breakpoints:

1. **xs** (0px and up): Spacing is scaled to 50% of the base value (e.g., `concrete-m-1` is 0.5rem).
2. **sm** (768px and up): Spacing is scaled to 75% of the base value (e.g., `concrete-m-1` is 0.75rem).
3. **md** (992px and up): Spacing is scaled to 85% of the base value (e.g., `concrete-m-1` is 0.85rem).
4. **lg** (1200px and up): Spacing is scaled to 100% of the base value (e.g., `concrete-m-1` is 1rem).

This ensures that spacings remain proportional and visually balanced across devices, from mobile to desktop.

## Class Naming Convention

The classes follow this structure:

- Prefix: `concrete-` to avoid conflicts with other styles.
- Type: `m` for margin, `p` for padding.
- Direction (optional): `t` (top), `b` (bottom), `l` (left), `r` (right), `x` (left + right), `y` (top + bottom), or `n` (negative for margins).
- Size: A number representing the spacing value in rem (e.g., `0-5` for 0.5rem, `1` for 1rem, `1-5` for 1.5rem).

Examples:
- `concrete-m-2`: 2rem margin on all sides.
- `concrete-pt-0-5`: 0.5rem padding on top.
- `concrete-mnx-1-5`: -1.5rem margin on left and right.
- `concrete-py-3`: 3rem padding on top and bottom.

## Purpose and Benefits

The **Responsive Spacings** add-on simplifies the process of styling layouts in Concrete CMS by providing:

- A consistent spacing system for margins and paddings.
- Responsive scaling to ensure layouts look good on all devices.
- Flexibility to apply spacings to specific sides or axes.
- Support for negative margins to create overlapping or inset designs.
- Easy integration with Concrete CMS’s block and area editing interface.

Use these classes to create clean, responsive, and maintainable layouts without writing custom CSS.